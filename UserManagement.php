<?php
require_once('db.php');
require_once('util.php');
$db = new Database;
$util = new Util;
//Handle Add New User Ajax Request
if (isset($_POST['add'])) {
    $username = $util->testInput($_POST['username']);
    $email = $util->testInput($_POST['email']);
    $department = $util->testInput($_POST['department']);

    if ($db->insert($username, $email, $department)) {
        echo $util->showMessage('success', 'User inserted successfully!');
    } else {
        echo $util->showMessage('danger', 'Something went wrong!');
    }
}

//Handle Fetch All Users Ajax Request 

if (isset($_GET['read'])) {
    $users = $db->read();
    $output = '';
    if ($users) {
        foreach ($users as $user) {
            $output .= '<tr>
                            <td>' . $user['id'] . '</td>
                            <td>' . $user['username'] . '</td>
                            <td>' . $user['email'] . '</td>
                            <td>' . $user['department'] . '</td>
                            <td>
                                <a href="#" id="' . $user['id'] . '" class="btn btn-success btn-sm py-0 editBtn" data-toggle="modal" data-target="#editUserModal">Edit</a>
                                <a href="#" id="' . $user['id'] . '" class="btn btn-danger btn-sm py-0 deleteBtn">Delete</a>
                            </td>
                        </tr>';
        }
        echo $output;
    } else {
        echo '<tr>
                <td colspan="5">No user data entered, please add user!</td>
              </tr>';
    }
}

//Handle Edit User Ajax Request

if (isset($_GET['edit'])) {
    $id = $_GET['id'];
    $user = $db->readOne($id);
    echo json_encode($user);
}

//Handle Update User Ajax Request
if (isset($_POST['update'])) {
    $id = $util->testInput($_POST['id']);
    $username = $util->testInput($_POST['username']);
    $email = $util->testInput($_POST['email']);
    $department = $util->testInput($_POST['department']);

    if ($db->update($id, $username, $email, $department)) {
        echo $util->showMessage('success', 'User Updated!');
    } else {
        echo $util->showMessage('danger', 'Somewthing went wrong!');
    }
}

//Ganddle Delete user Ajax Resuqst
if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    if ($db->delete($id)) {
        echo $util->showMessage('success', 'User Deleted!');
    } else {
        echo $util->showMessage('danger', 'Somewthing went wrong!');
    }
}
?>