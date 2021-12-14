<?php


// koneksi ke database -> nama host, username, password, nama database
$db = mysqli_connect("localhost", "root", "", "warmindo");

function query($q)
{
    global $db;
    $result = mysqli_query($db, $q);
    // var_dump(mysqli_error($db));
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        //append
        $rows[] = $row;
    }
    return $rows;
}

function insertOrder($data){
    global $db;
    
    date_default_timezone_set('Asia/Jakarta');

    $oid = (int)$data["oid"];
    $eid = (int)$data["eid"];
    $cid = (int)$data["cid"];
    $type = $data["type"];
    $time = date("h:i:s");
    $date = $data["date"];
    $date = date('Y-m-d', strtotime($date));
    $amount = (int)htmlspecialchars($data["amount"]);

    var_dump($data);
    var_dump($oid);
    var_dump($eid);
    var_dump($cid);
    var_dump($type);
    var_dump($time);
    var_dump($date);
    var_dump($amount);

    $query = "INSERT INTO orderItem(OID, EID, CID, OType, OTime, ODate, OAmount)
                    VALUES 
                    ($oid, $eid, $cid, '$type', '$time', '$date', $amount)";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function insertOrderDetail($data){
    global $db;
    
    date_default_timezone_set('Asia/Jakarta');

    $nid = (int)$data["nid"];
    $oid = (int)$data["oid"];
    $mid = (int)$data["mid"];
    $quantity = (int)$data["quantity"];
    $subtotal = (int)htmlspecialchars($data["subtotal"]);

    var_dump($data);
    var_dump($nid);
    var_dump($oid);
    var_dump($mid);
    var_dump($quantity);
    var_dump($subtotal);

    $query = "INSERT INTO orderdetail(NID, OID, MID, NMenuQuantity, NSubtotalAmount)
                    VALUES 
                    ($nid, $oid, $mid, $quantity, $subtotal)";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function insertMenu($data){
    global $db;
    
    date_default_timezone_set('Asia/Jakarta');

    $mid = (int)$data["mid"];
    $type = $data["type"];
    $name = htmlspecialchars($data["name"]);
    $price = (int)$data["price"];

    var_dump($data);
    var_dump($mid);
    var_dump($type);
    var_dump($name);
    var_dump($price);

    $query = "INSERT INTO menu(MID, MType, MName, MPrice)
                    VALUES 
                    ($mid, '$type', '$name', $price)";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);  
}

function insertEmployee($data){
    global $db;
    
    date_default_timezone_set('Asia/Jakarta');

    $eid = (int)$data["eid"];
    $name = htmlspecialchars($data["name"]);
    $address = $data["address"];
    $phoneNumber = $data["phoneNumber"];
    $salary = $data["salary"];
    $dob = $data["dob"];
    $dob = date('Y-m-d', strtotime($dob));

    var_dump($data);
    var_dump($eid);
    var_dump($name);
    var_dump($address);
    var_dump($phoneNumber);
    var_dump($salary);
    var_dump($dob);


    $query = "INSERT INTO employee(EID, EName, EAddress, EPhoneNumber, ESalary, EDOB)
                    VALUES 
                    ($eid, '$name', '$address', '$phoneNumber', $salary, '$dob')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function insertCustomer($data){
    global $db;
    
    date_default_timezone_set('Asia/Jakarta');

    $cid = (int)$data["cid"];
    $name = htmlspecialchars($data["name"]);
    $phoneNumber = $data["phoneNumber"];
    $address = $data["address"];

    var_dump($data);
    var_dump($cid);
    var_dump($name);
    var_dump($phoneNumber);
    var_dump($address);


    $query = "INSERT INTO customer(CID, CName, CPhoneNumber, CAddress)
                    VALUES 
                    ($cid, '$name', '$phoneNumber', '$address')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function delete($table, $pk, $id){
    global $db;
    $id = (int)$id;
    var_dump($table);
    var_dump($pk);
    var_dump($id);
    mysqli_query($db, "DELETE FROM $table WHERE $pk= $id");
    return mysqli_affected_rows($db);
}

function updateOrderItem($data){
    global $db;

    date_default_timezone_set('Asia/Jakarta');

    $oid = (int)$data["id"];
    $eid = (int)$data["eid"];
    $cid = (int)$data["cid"];
    $type = $data["type"];
    $time = date("h:i:s");
    $date = $data["date"];
    $date = date('Y-m-d', strtotime($date));
    $amount = (int)htmlspecialchars($data["amount"]);

    var_dump($data);
    var_dump($oid);
    var_dump($eid);
    var_dump($cid);
    var_dump($type);
    var_dump($time);
    var_dump($date);
    var_dump($amount);

    $query = "UPDATE orderitem SET
                EID = $eid,
                CID = $cid,
                OType = '$type',
                OTime = '$time',
                ODate = '$date',
                OAmount = $amount
                WHERE OID = $oid";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function updateOrderDetail($data){
    global $db;

    date_default_timezone_set('Asia/Jakarta');

    $nid = (int)$data["id"];
    $oid = (int)$data["oid"];
    $mid = (int)$data["mid"];
    $quantity = (int)$data["quantity"];
    $subtotal = (int)htmlspecialchars($data["subtotal"]);

    var_dump($data);
    var_dump($nid);
    var_dump($oid);
    var_dump($mid);
    var_dump($quantity);
    var_dump($subtotal);



    $query = "UPDATE orderdetail SET
                NID = $nid,
                OID = $oid,
                MID = $mid,
                NMenuQuantity = $quantity,
                NSubtotalAmount = $subtotal
                WHERE NID = $nid";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function updateMenu($data){
    global $db;

    date_default_timezone_set('Asia/Jakarta');

    $mid = (int)$data["id"];
    $type = $data["type"];
    $name = $data["name"];
    $price = (int)$data["price"];

    var_dump($data);
    var_dump($mid);
    var_dump($type);
    var_dump($mid);
    var_dump($name);
    var_dump($price);



    $query = "UPDATE menu SET
                MType = '$type',
                MName = '$name',
                MPrice = $price
                WHERE MID = $mid";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function updateEmployee($data){
    global $db;

    date_default_timezone_set('Asia/Jakarta');

    $eid = (int)$data["id"];
    $name = htmlspecialchars($data["name"]);
    $address = $data["address"];
    $phoneNumber = $data["phoneNumber"];
    $salary = $data["salary"];
    $dob = $data["dob"];
    $dob = date('Y-m-d', strtotime($dob));

    var_dump($data);
    var_dump($eid);
    var_dump($name);
    var_dump($address);
    var_dump($phoneNumber);
    var_dump($salary);
    var_dump($dob);

    $query = "UPDATE employee SET
                EName = '$name',
                EAddress = '$address',
                EPhoneNUmber = '$phoneNumber',
                ESalary = '$salary',
                EDOB = '$dob'
                WHERE EID = $eid";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}



