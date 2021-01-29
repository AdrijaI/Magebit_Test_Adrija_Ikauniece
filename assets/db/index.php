<?php
    include "./classes/dbh.php";
    include "./classes/search.php";
    include "./classes/table.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>

    <body>
        <form>
            <button type="submit" name="data" value="data" style="margin: 10px 10px 0 0; background-color: #4066A5; color: white; height: 27px;">Get data from database</button>
            <input type="text" name="search" placeholder="Search" style="margin-bottom: 10px; height: 20px; width: 300px;"/>
            <button type="submit" name="submit-search" style="height: 25px; ">Search</button>
        </form>


        <?php 
            $test_object = new Table();

            if(isset($_GET['data'])) {
                $sql = "SELECT id, email, provider, date FROM emails;";
                $test_object->getEmails($sql);

            }
            
            if(isset($_GET['submit-search'])) {
                $search = $_GET['search'];
                $search_result = new Search();
                $search_result->searchEmail($search);

            } else if(isset($_GET['name'])) {
                $sql = "SELECT id, email, provider, date FROM emails ORDER BY email;";
                $test_object->getEmails($sql);
                
            } else if (isset($_GET['date'])) {
                $sql = "SELECT id, email, provider, date FROM emails ORDER BY date;";
                $test_object->getEmails($sql);
            
            } else if (isset($_GET['delete'])) {
                $check = $_POST['checkbox'];
                $deleted = new Dbh();
                $deleted->delete($check);

            } else if (isset($_GET['gmail'])) {
                $sql = "SELECT id, email, provider, date FROM emails WHERE provider='gmail.com';";
                $test_object->getEmails($sql);

            } else if (isset($_GET['inbox'])) {
                $sql = "SELECT id, email, provider, date FROM emails WHERE provider='inbox.lv';";
                $test_object->getEmails($sql);

            } else if (isset($_GET['yahoo'])) {
                $sql = "SELECT id, email, provider, date FROM emails WHERE provider='yahoo.com';";
                $test_object->getEmails($sql);

            }
        ?>

        <form>
            <button type="submit" name="name" value="name" style="margin: 10px 10px 0 0;">Sort by name</button>
            <button type="submit" name="date" value="date" style="margin: 10px 10px 0 0;">Sort by date</button>
            <button type="submit" name="delete" value="delete" style="margin: 10px 10px 0 0;">Delete</button>
            <br>
            <button type="submit" name="gmail" value="gmail" style="margin: 10px 10px 0 0;">Filter Gmail</button>
            <button type="submit" name="inbox" value="inbox" style="margin: 10px 10px 0 0;">Filter Inbox</button>
            <button type="submit" name="yahoo" value="inbox" style="margin: 10px 10px 0 0;">Filter Yahoo</button>
        </form>
        
    </body>
</html>