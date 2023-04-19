let teacherForm = document.querySelector('.teacher');
let studentForm = document.querySelector('.student');

let teacherBtn = document.querySelector('.btn-teacher');
let studentBtn = document.querySelector('.btn-student');

studentBtn.addEventListener('click', function (){
    studentForm.classList.add('d-flex');
    teacherForm.classList.add('d-none');
})

teacherBtn.addEventListener('click', function (){
    teacherForm.classList.add('d-flex');
    studentForm.classList.add('d-none');
})