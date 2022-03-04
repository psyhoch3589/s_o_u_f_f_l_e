const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress"); //progress dynamic bar
const formSteps = document.querySelectorAll(".form-step"); //the divs of content
const progressSteps = document.querySelectorAll(".progress-step"); //the dots or circles

let formStepsNum = 0;   //to kep track of the active formStep

nextBtns.forEach((btn) => {    //for each next btn click 
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--; // it cannot go below 0 because there is no button for that 
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&   //if this is true we remove form-step-active
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active"); //add form-step-active to the class name(css applied)
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {  //if the index of circle is less than the index of the active one 
      progressStep.classList.add("progress-step-active"); //it must be colored
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}
//progressActive returns the number of active circles (they can be many at once)


function URLChange(titlestr) {
  var url=titlestr.replace(/ /g,"-");
  document.getElementsByName("url_code")[0].value=url;
}

function validat_form(){
  let user_title = document.querySelector("#user_title");
  let user_description = document.querySelector("#user_description");

  
  $("#user_title, #SLIDE_TITLE").val(user_title.value);  //to assign the value of user title into slide title without reloading
  $("#user_description, #DESCRIPTION").val(user_description.value);


  return false; //to prevent html from reloading 
}


function both_fc(){
  validat_form();
  return fetchpost();

}