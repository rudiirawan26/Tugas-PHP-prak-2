<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>

<body>
    <div class="bg-primary p-5">
        <h1 class="text-center text-white">Student Value Form</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <form action="form_nilai.php" method="get" class="mt-3">

                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" value="" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="">Nim</label>
                        <input type="text" name="nim" value="" class="form-control">
                    </div>
                    <label for="">Lesson</label>
                    <select name="lesson" class="form-select form-control" class="form-control">
                        <option value="">Choose Lesson :</option>
                        <option value="Web Programing">Web Programming</option>
                        <option value="Database">Database</option>
                        <option value="Statistika">Statiska</option>
                        <option value="PKN">PKN</option>
                        <option value="UI/UX">UI/UX</option>
                    </select>
                    <div class="form-group">
                        <label for=""> UTS Value</label>
                        <input type="number" name="uts_value" value="" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="">UAS Value</label>
                        <input type="number" name="uas_value" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Assignment Value</label>
                        <input type="number" name="assignment_value" value="" class="form-control">
                    </div>
                    <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">

                </form>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                        Result
                    </div>

                    <!-- Awal PHP -->
                    <?php
                    $name = $_GET['name'];
                    $nim = $_GET['nim'];
                    $lesson = $_GET['lesson'];
                    $uts_value = $_GET['uts_value'];
                    $uas_value = $_GET['uas_value'];
                    $assignment_value = $_GET['assignment_value'];
                    $proses = $_GET['proses'];
                    $rumus_alphabet = $uas_value + $uts_value + $assignment_value;
                    $alphabet = $rumus_alphabet / 3;

                    ?>
                    <!-- Akhir PHP -->

                    <!-- Awal mencetak HASIL -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Name : <?php echo $name ?></li>
                        <li class="list-group-item">Nim : <?php echo $nim ?></li>
                        <li class="list-group-item">Lesson : <?php echo $lesson ?></li>
                        <li class="list-group-item"> UTS Value : <?php echo $uts_value ?></li>
                        <li class="list-group-item">UAS Value : <?php echo $uas_value ?></li>
                        <li class="list-group-item">Assignment Value : <?php echo $assignment_value ?></li>
                        <li class="list-group-item">Value Total : <?php echo $alphabet ?></li>
                        <li class="list-group-item">Value in Alphabet :

                            <!-- Awal Rumus PHP Alphabet -->
                            <?php
                            if ($alphabet >= 85) {
                                echo 'A';
                            } elseif ($alphabet >= 70) {
                                echo 'B';
                            } elseif ($alphabet >= 60) {
                                echo 'C';
                            } elseif ($alphabet >= 40) {
                                echo 'D';
                            } else {
                                echo 'E';
                            }
                            ?>
                            <!-- Akhir Rumus PHP Alphabet -->

                        </li>
                        <!-- Akhir mencetak HASIL -->


                    </ul>
                </div>

            </div>

            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                        Value
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">A : 85 - 100</li>
                        <li class="list-group-item">B : 70 -84</li>
                        <li class="list-group-item">C: 60-79</li>
                        <li class="list-group-item">D : 40 - 59 </li>
                        <li class="list-group-item">E : Less than 40 </li>


                    </ul>
                </div>

            </div>

        </div>
</body>

</html>