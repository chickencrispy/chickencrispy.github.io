// SET INPUT MAX DAY TODAY FOR HISTORY
// Input date set default value today, and max date set today & show picker on focus
const dateToday = new Date().toISOString().split("T")[0];
document.querySelectorAll(".max-today").forEach(input => {
  input.value = dateToday;
  input.max = dateToday;
  input.addEventListener("focus", () => {
    input.showPicker();
  });
});

// AUTO SHOW PICKER ON INPUT DATE
document.querySelectorAll("input[type='date']").forEach(input => {
  input.addEventListener("focus", () => {
    input.showPicker();
  })
});

// DROPDOWN MENU FUNCTION
// Display selection item name on input/button dropdown
const dropdownMenu = document.querySelectorAll(".dropdown-menu");
dropdownMenu.forEach(dropdown => {
  dropdown.querySelectorAll(".form-check-input").forEach(checkbox => {
    checkbox.addEventListener("change", () => {
      const checkeds = dropdown.querySelectorAll(".form-check-input:checked");
      const dropdBtn = dropdown.previousElementSibling;
      var checkLen = checkeds.length;
      if(checkLen == 1) {
        dropdBtn.textContent = checkeds[0].nextElementSibling.textContent;
      }else if(checkLen == 2) {
        dropdBtn.textContent = checkeds[0].nextElementSibling.textContent + ", " + checkeds[1].nextElementSibling.textContent;
      }else if(checkLen > 2) {
        dropdBtn.textContent = checkeds[0].nextElementSibling.textContent + ", " + checkeds[1].nextElementSibling.textContent  + ", & " + (checkLen-2) + " more";
      }
    });
  });
});

// FILTER PERIOD ON TRANSACTION HISTORY
// Show input date for select period of transaction history
const filterPeriod = document.querySelectorAll('input[name="filter-period"]');
filterPeriod.forEach(periods => {
  periods.addEventListener("change", function() {
    document.getElementById("fth-period").classList.toggle("d-none", this.value != "custom");
  });
});

// FORMAT INPUT CURRENCY
document.querySelectorAll('[inputmode=numeric]').forEach(input => {
  input.addEventListener('input', formatCurrency);
});

function formatCurrency(event) {
  let value = this.value.replace(/[^\d]/g, "");
  value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  this.value = value;
}

// CUSTOM PERIOD
const customPeriod = document.getElementById("custom-period");
if(customPeriod){
  const customPeriodSelect = customPeriod.querySelector("select");

  function toggleCustomPeriod() {
    customPeriodSelect.parentNode.classList.toggle("d-none");
    customPeriodSelect.parentNode.nextElementSibling.classList.toggle("d-none");
  }
  
  customPeriodSelect.addEventListener("change", () => {
    const child = customPeriodSelect.children.length;
    if(customPeriodSelect.children[child-1].selected) {
      toggleCustomPeriod();
    }
  });
}

// ADMIN PAGE MENU
const showNavbar = (toggleId, navId, mainId, headerId) => {
  const toggle = document.getElementById(toggleId);
  const sidebar = document.getElementById(navId);
  const main = document.getElementById(mainId);
  const topHeader = document.getElementById(headerId);
  
  if(toggle && sidebar && main && topHeader){
    toggle.addEventListener('click', () => {
      sidebar.classList.toggle('show');
      main.classList.toggle('expand');
      topHeader.classList.toggle('expand');
    });
  }
}
showNavbar('header-toggle','sidebar','main-content','header');

// FORM STEPS
const step = document.querySelector(".step");
if(step) {
  const stepItems = step.querySelectorAll(".step-items");
  const btnStep = document.querySelectorAll(".btn-step");
  const prevBtn = btnStep[0];
  const nextBtn = btnStep[btnStep.length - 1];
  const stepLen = stepItems.length;
  let curStep = 0;

  function updateButton() {
    nextBtn.textContent = curStep === stepLen - 1 ? "Submit" : "Next";
    prevBtn.classList.toggle("d-none", curStep === 0);
  }

  function updateStep(newStep) {
    stepItems[curStep].classList.remove("active");
    curStep = newStep;
    stepItems[curStep].classList.add("active");
    updateButton();
  }

  updateButton();
  stepItems[curStep].classList.add("active");

  nextBtn.addEventListener("click", () => {
    if (curStep !== stepLen - 1) updateStep(curStep + 1);
    else nextBtn.setAttribute("type", "submit");
  });

  prevBtn.addEventListener("click", () => {
    if (curStep !== 0) updateStep(curStep - 1);
  });
}