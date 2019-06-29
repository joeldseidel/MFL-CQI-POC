var importPatientModal;
$(document).ready(function(){
    importPatientModal = $('#import-patient-modal');
    importPatientModal.modal({
        backdrop: "static",
        keyboard: false,
        show: true
    });
    $('#import-patient-button').click(function(){
       importPatient();
    });
});

function importPatient(){
    importPatientModal.modal("hide");
    $.ajax({
        url: "../php/ehr-import.php",
        method: "POST",
        data: "Tbt3KuCY0B5PSrJvCu2j-PlK.aiHsu2xUjUM8bWpetXoB",
        success: displayPatientProfile,
        error: function(){
            alert("import patient error");
        }
    });
}

function displayPatientProfile(patientProfile){
    patientProfile = JSON.parse(patientProfile);
    console.log(patientProfile);
    $('#demo-sex').text(patientProfile.sex);
    $('#demo-age').text(patientProfile.age);
    $('#demo-race').text(patientProfile.race);
    $('#demo-state').text(patientProfile.ethnicity);
}