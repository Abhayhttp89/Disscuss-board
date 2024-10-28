<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-md-8">
            <h1 class="heading text-primary mb-4 text-center">Questions</h1>

            <?php
            include('./common/db.php');

            // Initialize variables from GET parameters safely
            $cid = isset($_GET["c-id"]) ? intval($_GET["c-id"]) : null;
            $uid = isset($_GET["u-id"]) ? intval($_GET["u-id"]) : null;
            $search = isset($_GET["search"]) ? $conn->real_escape_string($_GET["search"]) : null;

            // Prepare query based on the condition
            if ($cid) {
                $query = "SELECT * FROM questions WHERE category_id = $cid";
            } else if ($uid) {
                $query = "SELECT * FROM questions WHERE user_id = $uid";
            } else if (isset($_GET["latest"])) {
                $query = "SELECT * FROM questions ORDER BY id DESC";
            } else if ($search) {
                $query = "SELECT * FROM questions WHERE title LIKE '%$search%'";
            } else {
                $query = "SELECT * FROM questions";
            }

            // Execute query and check if it runs successfully
            $result = $conn->query($query);

            // Display the list of questions
            if ($result && $result->num_rows > 0) {
                foreach ($result as $row) {
                    $title = htmlspecialchars($row['title']);
                    $id = intval($row['id']);
                    echo "<div class='row question-list mb-3'>";
                    echo "<h4 class='my-question'>
                              <a href='?q-id=$id' class='text-decoration-none text-primary'>$title</a>";
                    
                    // Conditional delete link if $uid exists
                    echo $uid ? "<a href='./server/requests.php?delete=$id' class='text-danger ms-3'>Delete</a>" : ''; 
                    echo "</h4></div>";
                }
            } else {
                echo "<p class='text-muted'>No questions found.</p>";
            }
            ?>
        </div>
        <div class="col-12 col-md-4">
            <?php include('categorylist.php'); ?>
        </div>
    </div>
</div>
