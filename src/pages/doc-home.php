<!DOCTYPE html>
<head>
    <title>DOC HOME</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../script/doc-home.js"></script>
    <link href="../style/stylesheet.css">
</head>
<body>
    <div class="container-fluid">
        <h1 class="main-title-text">Imported Patient Profile</h1>
        <div class="container-fluid" id="patient-demographics-container">
            <h3 class="section-title-text">Patient Demographics</h3>
            <div class="row">
                <div class="col-sm-2">
                    <p>Sex:</p>
                    <p id="demo-sex"></p>
                </div>
                <div class="col-sm-2">
                    <p>Age:</p>
                    <p id="demo-age"></p>
                </div>
                <div class="col-sm-2">
                    <p>Race:</p>
                    <p id="demo-race"></p>
                </div>
                <div class="col-sm-2">
                    <p id="demo-state"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="import-patient-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Open Patient</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <button type="button" class="btn btn-outline-dark btn-block" id="import-patient-button">Import Patient From EHR</button>
                        <button type="button" class="btn btn-outline-dark btn-block" id="create-patient-profile-button">Create New Patient</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="loading-modal" tabindex="-1" role="dialog" aria-labelledby="loadMeLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="loader"></div>
                </div>
            </div>
        </div>
    </div>
</body>