const alName = document.getElementById("alname");
const enrollYear = document.getElementById("enrolYear");
const gradYear = document.getElementById("gradYear");
const headmaster = document.getElementById("headmasters");
const teachers = document.getElementById("teachers");
const schoolResults = document.getElementById("results");
const alumniForm = document.getElementById('alumniForm');
const alumniButton = document.getElementById('alumniBtn');

// state
let isAlumniOpen = false;

const years = [2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013];
const headmasters = [
  "Michael Jordan",
  "Abraham Lincoln",
  "Cristopher Nolan",
  "David Armstrong",
  "Helsings Nello",
  "Shanas Kashoggi",
  "Benedict Cumberbatch",
  "Reuben Mbappe",
  "Oliver Queen",
];

const famousTeachers = [
  "Michael Oliver",
  "Declan Rice",
  "Danny drinkwater",
  "Ms. Habibti",
  "Philemon Khazri",
  "Jordan Luis",
  "Lubango Minzo",
  "Dracula Untold",
  "Leonard Peter",
];

const results = ["Div I", "Div II", "Div III", "Div IV", "Div 0"];

// append elements in select tag
const appendElements = (value, element) => {
  let option = document.createElement("option");

  option.value = value;
  option.text = value;

  return element?.appendChild(option);
};

const checkCharacters = (value, limit) => value > limit;

years.forEach((val) => {
  appendElements(val, enrollYear);
  appendElements(val, gradYear);
});

headmasters.forEach((name) => {
  appendElements(name, headmaster);
});

famousTeachers.forEach((teacher) => appendElements(teacher, teachers));

results.forEach((result) => appendElements(result, schoolResults));

// check alumnus name

alName.onchange = (e) => {
  if (checkCharacters(e.target.value, 30)) {
    alName.style.border = "1px solid red";
  } else {
    alName.style.border = "1px solid green";
  }
};


// alumni page logic
const showAlumniForm = () => {
  alumniForm.style.display = isAlumniOpen?"flex":"none";
  isAlumniOpen = !isAlumniOpen;
}

window.addEventListener('load',()=>{
 showAlumniForm()
})

alumniButton.addEventListener('click',()=>{
 showAlumniForm()
})
