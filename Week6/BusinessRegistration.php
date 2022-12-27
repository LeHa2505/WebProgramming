<html>

<head>
    <style>
        .form {
            display: flex;
            flex-direction: row;
        }

        .left {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            /* background-color: red; */
        }

        .right {
            padding-left: 10px;
        }

        label {
            margin-bottom: 12px;

            font-size: 18px;
            font-weight: 500;
            display: block;
        }

        select,
        .l2,
        .btn {
            margin-top: 24px;
        }

        .label {
            width: 180px;
            display: inline-block;
        }

        input {
            width: 300px;
            display: inline;
        }
    </style>
</head>

<body>

    <?php

    $host = 'localhost';
    $user = 'root';
    $pass = '123456';
    $database = 'week6';
    $connect = mysqli_connect($host, $user, $pass, $database);
    $category_table = 'Category';

    function create_insert_business_query()
    {
        $name = $_POST["name"];
        $addr = $_POST["addr"];
        $city = $_POST["city"];
        $tele = $_POST["tele"];
        $url = $_POST["url"];

        return "INSERT INTO `w7`.`Business`
        (`id`,
        `businessName`,
        `address`,
        `city`,
        `telephone`,
        `url`)
        VALUES
        (default,
        \"$name\",
        \"$addr\",
        \"$city\",
        \"$tele\",
        \"$url\");
        ";
    }

    function create_insert_business_category_query($business_id, $cate_id)
    {
        return "INSERT INTO `w7`.`BusinessCategory`
        (`businessId`,
        `categoryId`)
        VALUES
        ($business_id, $cate_id);";
    }

    function submit($connect)
    {
        $ins = create_insert_business_query();
        if (mysqli_query($connect, $ins)) {
            $last_id = mysqli_insert_id($connect);
            if (isset($_POST["cate"])) {
                $categories = $_POST["cate"];
                foreach ($categories as $c) {
                    $ins_r = create_insert_business_category_query($last_id, $c);
                    if (!mysqli_query($connect, $ins_r)) {
                        print "Insert business-category failed!";
                    }
                }
            } else {
                $categories = null;
            }
        } else {
            print "Insert business failed!";
        }

        $_SESSION["is_new_summit"] = true;
    }

    // if (isset($_POST)) {
    //     submit($connect);
    // }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        print "aaaa";
        $is_new_summit = true;
        submit($connect);
    } else {
        $categories = false;
        $is_new_summit = false;
    }

    ?>

    <h1>Business Registration</h1>
    <form class="form" action="./BusinessRegistration.php" method="post">
        <div class="left">
            <?php
            if ($is_new_summit) {
                print "<span>";
                print "Record inserted as shown below";
                print "</span>";
                print "<span class=\"l2\">";
                print "Selected category values are highlighted";
                print "</span>";
            } else {
                print "<span>
                Click on one or control click on multiple categories:
            </span>";
            }
            ?>

            <select size="4" multiple name="cate[]" id="cate">
                <?php
                $select_query = "SELECT id, name FROM $category_table";

                $results_id = mysqli_query($connect, $select_query);
                if ($results_id) {
                    while ($row = mysqli_fetch_row($results_id)) {
                        $name = $row[1];
                        $id = $row[0];
                        print "<option value=\"$id\">";
                        print "$name";
                        print '</option>';
                    }
                }
                ?>
            </select>
            <div class="btn">
                <button type="submit">Add business</button>
            </div>
        </div>
        <div class="right">
            <label>
                <span class="label">Business Name:</span>
                <input type="text" name="name" />
            </label>

            <label>
                <span class="label">Address:</span>
                <input type="text" name="addr" />
            </label>

            <label>
                <span class="label">City:</span>
                <input type="text" name="city" />
            </label>

            <label>
                <span class="label">Telephone:</span>
                <input type="text" name="tele" />
            </label>

            <label>
                <span class="label">URL:</span>
                <input type="text" name="url" />
            </label>
        </div>
    </form>

    <?php
    ?>
</body>

</html>