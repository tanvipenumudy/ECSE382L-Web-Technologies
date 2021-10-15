function index() {
  switch(document.getElementById("selectCourse").value){
    case "B.E":
    window.location.href = "BE.html";
    break;
    case "S.S.C":
    window.location.href = "SSC.html";
    break;
    case "Management":
    window.location.href = "Management.html";
    break;
  }
}

function BE(){
  switch(document.getElementById("selectBEBranch").value){
    case "I.T":
    window.location.href = "IT.html";
    break;
    case "C.S.E":
    window.location.href = "CSE.html";
    break;
    case "E.C":
    window.location.href = "EC.html";
    break;
    case "E.E":
    window.location.href = "EE.html";
  }
}

function SSC(){
  switch(document.getElementById("selectSSCBranch").value){
    case "Agriculture":
    window.location.href = "Agriculture.html";
    break;
    case "Automotive":
    window.location.href = "Automotive.html";
    break;
    case "Food Industry":
    window.location.href = "FoodIndustry.html";
    break;
  }
}

function Management(){
  switch(document.getElementById("selectManagementBranch").value){
    case "I.B":
    window.location.href = "IB.html"
    break;
    case "M.M":
    window.location.href = "MM.html";
    break;
    case "H.R":
    window.location.href = "HR.html";
    break;
  }
}
