<html>

<head>
    <title>
    </title>
</head>
<body>
    <?php
          include 'menu_file.php';
          include 'header.php';
          $skillsets = Array('skillset1','skillset2');
          $roles = Array('role1','role2');
          $_GET['vv'];

    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/fSelect.css">

    <div id="dashboard">
        <div id="directory-heading">
            User Directory
            <button id="addClinician" >ADD CLINICIAN</button>
        </div>
        <div id="filter-patients">
            <div class="filter-patients-div" id="filter-patients-heading">
                FILTER PATIENTS
            </div>

            <div class="filter-patients-div" id="filter-patients-form-div">
                <form id="filter-patients-form">
                    <div class="row">
                        <div class="col-4">
                            First Name
                            <input name = "first_name" type="text" placeholder="First Name">
                        </div>
                        <div class="col-4">
                            Skillset
                            <br>
                            <select id='skillset-select' multiple="multiple">
                                <?php
                                    for($i = 0; $i < count($skillsets); $i++)
                                        {
                                            $j = $i+1;
                                            echo "<option value='skillset-$j'>$skillsets[$i]</option>";
                                        }
                                ?>
                            </select>
                        </div>
                        <div class="col-4">
                            Date-Added
                            <div id="date">
                            <input type="date" id="start-date"> <input type="date" id="end-date">
                            </div>
                        </div>
                    </div>
                    <div class="row" id="form-div-2">
                        <div class="col-4">
                            Last Name
                            <input type="text" placeholder="Last Name">
                        </div>
                        <div class="col-4">
                            Role
                            <select id="role-select" class="form-control">
                                <option selected="selected" disabled>Select Role</option>;
                                <?php
                                for($i = 0; $i < count($roles); $i++)
                                {
                                    $j = $i+1;
                                    echo "<option value='role-$j'>$roles[$i]</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-4">
                            Status
                            <div id="radio-id">
                                <input type="radio" name="status" value="active">Active
                                <input type="radio" name="status" value="inactive"> Inactive
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="filter-patients-div" id="filter-patients-buttons">
            <button id="close" class="btn">CLOSE</button>
            <button id="clear" class="btn">Clear</button>
            <button id="apply" class="btn btn-success">APPLY</button>
        </div>
        <div id="display-patients-div">
            <div id="display-header" class="display-filtered-item">
                <div class="row">
                    <div class="col-2">User's Name</div>
                    <div class="col-2">Skillset</div>
                    <div class="col-2">Role</div>
                    <div class="col-2">Added By</div>
                    <div class="col-2">Date Added</div>
                    <div class="col-2">Status</div>
                </div>
            </div>
            <div class="display-filtered-item" id="filter-patients-append">

            </div>
            <div id="pagination">
            </div>
        </div>
    </div>


    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css"
          rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>

    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"
          rel="stylesheet" type="text/css" />
    <script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"
            type="text/javascript"></script>
    <script src="../js/fSelect.js"></script>


</body>

<script src="../js/dashboard.js"></script>
</html>