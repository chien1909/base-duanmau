// ===== ACTIVE MENU =====
try {
  const active_menu = document.querySelectorAll(".nav-link");
  const param = new URLSearchParams(window.location.search);
  const currentPath = param.get("class") || "home";

  active_menu.forEach((item) => {
    const linkPath = item.getAttribute("href");
    if (linkPath.includes(`class=${currentPath}`)) {
      item.classList.add("active", "fw-bold", "text-primary");
    } else {
      item.classList.remove("active", "fw-bold", "text-primary");
    }
  });
} catch (error) {
  console.log("Lỗi active menu: ", error);
}

// Dinh dang gia
try {
  console.log("Định dạng giá...");
  const prices = document.querySelectorAll(".gia");
  if (prices.length > 0) {
    prices.forEach((p) => {
      let num_p = parseInt(p.innerText);
      if (!isNaN(num_p)) {
        p.innerText = num_p.toLocaleString("vi-VN") + "đ";
      }
    });
  }
} catch (err) {
  console.error("❌ Lỗi định dạng giá:", err);
}

// Bien the product
try {
  let optionCounter = 0;
  let variantIndex = 0;

  const optionsInputContainer = document.getElementById(
    "optionsInputContainer"
  );
  const variantsContainer = document.getElementById("variantsContainer");
  const addOptionBtn = document.getElementById("addOptionBtn");
  const generateVariantsBtn = document.getElementById("generateVariantsBtn");
  const variantsHeader = document.getElementById("variantsHeader");
  const form = document.getElementById("productForm");

  // ================== QUILL ==================
  document.addEventListener("DOMContentLoaded", function () {
    const editorContainer = document.getElementById("editor-container");
    if (editorContainer) {
      const quill = new Quill("#editor-container", {
        theme: "snow",
        placeholder: "Nhập nội dung ...",
        modules: {
          toolbar: [
            [{ header: [1, 2, 3, false] }],
            ["bold", "italic", "underline", "strike"],
            [{ list: "ordered" }, { list: "bullet" }],
            ["link", "image", "video"],
            ["clean"],
          ],
        },
      });

      form?.addEventListener("submit", () => {
        const hidden = document.getElementById("hiddenDescription");
        if (hidden) hidden.value = quill.root.innerHTML;
      });
    }
  });

  function calculateSalePrice(row) {
    const price = parseFloat(row.querySelector(".variant-price").value) || 0;
    const discount =
      parseFloat(row.querySelector(".variant-discount").value) || 0;
    const saleInput = row.querySelector(".variant-sale-price");
    let sale = price;
    if (price > 0 && discount > 0 && discount <= 100)
      sale = price * (1 - discount / 100);
    saleInput.value = Math.round(sale).toLocaleString("vi-VN");
  }

  function updateDeleteButtons() {
    const rows = optionsInputContainer.querySelectorAll(".option-row");
    const btns = optionsInputContainer.querySelectorAll(".delete-option-btn");
    btns.forEach((btn) => (btn.disabled = rows.length === 1));
  }

  function addOptionRow() {
    optionCounter++;
    const id = `option-${optionCounter}`;
    const html = `
      <div class="option-row row g-2 align-items-end mb-2 mt-3" id="${id}">
        <div class="col-md-4">
          <input type="text" class="form-control option-name" placeholder="Tên thuộc tính (VD: Màu sắc)" required>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control option-values" placeholder="Giá trị (VD: Đỏ, Xanh, Đen)" required>
        </div>
        <div class="col-md-2 d-grid">
          <button type="button" class="btn btn-danger delete-option-btn" data-option-id="${id}">
            <i class='bx bx-trash'></i>
          </button>
        </div>
      </div>`;
    optionsInputContainer.insertAdjacentHTML("beforeend", html);
    updateDeleteButtons();
  }

  addOptionBtn?.addEventListener("click", addOptionRow);

  optionsInputContainer?.addEventListener("click", (e) => {
    const btn = e.target.closest(".delete-option-btn");
    if (!btn) return;
    const id = btn.getAttribute("data-option-id");
    document.getElementById(id)?.remove();
    document
      .querySelectorAll(`.variant-row[data-parent="${id}"]`)
      .forEach((v) => v.remove());
    if (!document.querySelector(".variant-row")) {
      variantsHeader.style.display = "none";
      variantsContainer.innerHTML = `<div class="alert alert-info text-center">Nhấn "Tạo biến thể" sau khi nhập thuộc tính.</div>`;
    }
    updateDeleteButtons();
  });

  generateVariantsBtn?.addEventListener("click", () => {
    const rows = Array.from(
      optionsInputContainer.querySelectorAll(".option-row")
    );
    if (!rows.length || !rows[0].querySelector(".option-values").value.trim()) {
      alert("Vui lòng thêm ít nhất một thuộc tính và giá trị.");
      return;
    }

    const existingVariants = {};
    document.querySelectorAll(".variant-row").forEach((row) => {
      const opt = row.getAttribute("data-option");
      const val = row.getAttribute("data-value");
      const key = `${opt}-${val}`;
      existingVariants[key] = row;
    });

    let hasVariant = false;

    rows.forEach((row) => {
      const optionId = row.id;
      const name = row.querySelector(".option-name")?.value.trim();
      const vals = (row.querySelector(".option-values")?.value || "")
        .split(",")
        .map((v) => v.trim())
        .filter((v) => v);

      if (name && vals.length) {
        hasVariant = true;
        vals.forEach((v) => {
          const key = `${name}-${v}`;
          if (!existingVariants[key]) {
            const variantHtml = `
              <div class="variant-row border rounded p-3 mb-3"
                   data-parent="${optionId}" data-option="${name}" data-value="${v}">
                <strong>${name}:</strong> ${v}
                <div class="mt-2 row g-3">
                  <input type="hidden" name="variants[${variantIndex}][option]" value="${name}">
                  <input type="hidden" name="variants[${variantIndex}][value]" value="${v}">
                  <div class="col-md-3">
                    <label class="form-label mb-0 small">Giá gốc (*)</label>
                    <input type="number" class="form-control variant-price" name="variants[${variantIndex}][price]" min="0" placeholder="0" required>
                  </div>
                  <div class="col-md-3">
                    <label class="form-label mb-0 small">Giảm giá (%)</label>
                    <input type="number" class="form-control variant-discount" name="variants[${variantIndex}][discount]" min="0" max="100" placeholder="0">
                  </div>
                  <div class="col-md-3">
                    <label class="form-label mb-0 small">Giá sau giảm</label>
                    <input type="text" class="form-control variant-sale-price" readonly placeholder="Giá bán">
                  </div>
                  <div class="col-md-3">
                    <label class="form-label mb-0 small">Kho hàng (*)</label>
                    <input type="number" class="form-control variant-stock" name="variants[${variantIndex}][stock]" min="0" placeholder="0" required>
                  </div>
                  <div class="col-12 mt-2">
                    <label class="form-label mb-0 small">Hình ảnh biến thể</label>
                    <input class="form-control" type="file" name="variants[${variantIndex}][images][]" multiple>
                  </div>
                </div>
              </div>`;
            variantsContainer.insertAdjacentHTML("beforeend", variantHtml);
            variantIndex++;
          }
        });
      }
    });

    if (hasVariant) {
      variantsHeader.style.display = "block";
      document
        .querySelectorAll(".variant-price, .variant-discount")
        .forEach((input) => {
          input.addEventListener("input", function () {
            calculateSalePrice(this.closest(".variant-row"));
          });
        });
    } else {
      variantsHeader.style.display = "none";
      variantsContainer.innerHTML = `<div class="alert alert-warning text-center">Không có giá trị hợp lệ để tạo biến thể.</div>`;
    }
  });
} catch {}
