<?php

include('../db_con.php');

if (isset($_POST['submit'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $pro_url = str_replace(' ', '-', $_POST['pro_url']);
    $pro_tile = $_POST['pro_tile'];
    $highlight_text = $_POST['highlight_text'];
    $status = $_POST['status'];
    $project_brief = $_POST['project_brief'];
    $create_at = date('Y-m-d');

    $sql = "UPDATE add_project SET pro_url = ?, pro_tile = ?, highlight_text = ?, status = ?, project_brief = ?, created_at = ? WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssssssi", $pro_url, $pro_tile, $highlight_text, $status, $project_brief, $create_at, $id);
    $stmt->execute();

    // Delete old images
    $con->query("DELETE FROM project_images WHERE project_id = $id");

    function uploadFile($fileType, $id, $con) {
        if (isset($_FILES[$fileType]) && !empty($_FILES[$fileType]['name'][0])) {
            $target_dir = "../story/success_story_uploads/";
            foreach ($_FILES[$fileType]['name'] as $key => $fileName) {
                $uniqueName = uniqid() . "_" . basename($fileName);
                $targetFile = $target_dir . $uniqueName;
                if (move_uploaded_file($_FILES[$fileType]['tmp_name'][$key], $targetFile)) {
                    $sql = "INSERT INTO project_images (project_id, $fileType) VALUES (?, ?)";
                    $stmt = $con->prepare($sql);
                    $stmt->bind_param("is", $id, $uniqueName);
                    $stmt->execute();
                }
            }
        }
    }

    uploadFile('image', $id, $con);
    uploadFile('logos', $id, $con);

    header('Location: story_list.php');
}
?>
