<?php
// include 'admin_panel.php';

// if (isset($_POST['update'])) {
//     $id = $_POST['id'];
//     $title = $_POST['title'];
//     $content = $_POST['content'];
//     // $conn->query("UPDATE pages SET title='$title', content='$content' WHERE id=$id");
//     $sql = "UPDATE pages SET title='$title', content='$content' WHERE id=$id";
//     mysqli_query($conn, $sql);

//     header('Location: pages_table.php');
// }
?>

<!-- <?php
        //  if (isset($_GET['edit'])) {
        //             $id = $_GET['edit'];
        //             $page = $conn->query("SELECT * FROM pages WHERE id=$id")->fetch_assoc();
        ?>
    <div class="container">
        <h2 class="mt-4">Edit Page</h2>
        <form method='POST'>
            <input type='hidden' name='id' value='<?php echo $page['id']; ?>'>
            <input type='text' name='title' value='<?php echo $page['title']; ?>' class="form-control" required>
            <textarea name='content' class="form-control mt-2" required><?php echo $page['content']; ?></textarea>
            <button type='submit' name='update' class="btn btn-primary mt-2">Update Page</button>
        </form>
    <?php
    //  }
    ?>
    </div> -->


<?php
include 'admin_panel.php';

    $id = $_POST['id'];
// $page = $_GET['page'];
$query = "SELECT * FROM `pages` WHERE id = '$id'";
$about_edit = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($about_edit);
?>

<h2>Edit About Page</h2>
<form method="post" action="about_update.php" enctype="multipart/form-data">
    <label>Title</label><br>
    <input type="text" name="title" value="<?= htmlspecialchars($data['title']) ?>" required><br><br>

    <label>Current Image</label><br>
    <img src="../uploads/<?= htmlspecialchars($data['image']) ?>" width="150"><br>
    <label>Change Image</label>
    <input type="file" name="image"><br><br>

    <label>Badge Text</label><br>
    <input type="text" name="badge_text" value="<?= htmlspecialchars($data['badge_text']) ?>"><br><br>

    <label>Highlight Years</label><br>
    <input type="text" name="highlight_years" value="<?= htmlspecialchars($data['highlight_years']) ?>"><br><br>

    <label>Description</label><br>
    <textarea name="description" rows="5"><?= htmlspecialchars($data['description']) ?></textarea><br><br>

    <h4>Feature 1</h4>
    <label>Icon (e.g., 🏋️)</label><br>
    <input type="text" name="feature1_icon" value="<?= htmlspecialchars($data['feature1_icon']) ?>"><br>
    <label>Title</label><br>
    <input type="text" name="feature1_title" value="<?= htmlspecialchars($data['feature1_title']) ?>"><br>
    <label>Description</label><br>
    <textarea name="feature1_desc"><?= htmlspecialchars($data['feature1_desc']) ?></textarea><br><br>

    <h4>Feature 2</h4>
    <label>Icon (e.g., 🏅)</label><br>
    <input type="text" name="feature2_icon" value="<?= htmlspecialchars($data['feature2_icon']) ?>"><br>
    <label>Title</label><br>
    <input type="text" name="feature2_title" value="<?= htmlspecialchars($data['feature2_title']) ?>"><br>
    <label>Description</label><br>
    <textarea name="feature2_desc"><?= htmlspecialchars($data['feature2_desc']) ?></textarea><br><br>

    <button type="submit" name="update">Update</button>
</form>