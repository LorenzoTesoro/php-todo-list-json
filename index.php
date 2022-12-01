<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-TODO-LIST-JSON</title>


    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- link to css -->
    <link rel="stylesheet" href="./style.css">
</head>

<body class="d-flex flex-column align-items-center">

    <div id="app">
        <h1 class="text-center">Todo List</h1>


        <div class="container tasks rounded-2" v-if="tasks.length">
            <ul>
                <li v-for="task in tasks">{{task.title}}</li>
            </ul>
        </div>
        <div v-else>
            <p>No tasks</p>
        </div>
        <div class="container text-center">
            <div>
                <div action="read-tasks.php" method="post">
                    <label for="new_task"></label>
                    <input type="text" name="new_task" id="new_task" placeholder="Inserisci elemento..." v-model='newTask' @keyup.enter="saveTask">
                    <button type="submit" class="btn btn-primary ms-3" @click="saveTask">Inserisci</button>
                </div>
            </div>
        </div>
    </div>






    <!-- Bootstrap libraries  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- Vue cdn -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Axios cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.0/axios.min.js" integrity="sha512-OdkysyYNjK4CZHgB+dkw9xQp66hZ9TLqmS2vXaBrftfyJeduVhyy1cOfoxiKdi4/bfgpco6REu6Rb+V2oVIRWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- link to main.js -->
    <script src='./main.js'></script>
</body>

</html>