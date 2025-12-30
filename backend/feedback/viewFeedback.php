<?php 
require_once '../../config/auth.php'; 
require_once '../../config/db.php'; 
requireRole('admin'); 
include '../includes/nav.php'; 
?>

<div style="padding:30px;">
    <h2>Detailed Feedback Responses</h2>
    <p>Viewing averages calculated across 7 evaluation criteria.</p>

    <table class="admin-table">
        <thead>
            <tr style="background-color:#343A40; color:white;">
                <th>Student Details</th>
                <th>Category</th>
                <th>Target (Lecturer/Dorm)</th>
                <th style="text-align:center;">Avg Rating</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Join feedback with users to get student profile information
            $sql = "SELECT f.*, u.fullname, u.student_id_no 
                    FROM feedback f 
                    JOIN users u ON f.user_id = u.id 
                    ORDER BY f.created_at DESC";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    // FIX: (int) casting prevents "Unsupported operand types" error
                    // It converts any string data into a number before math is done
                    $q1 = (int)$row['q1'];
                    $q2 = (int)$row['q2'];
                    $q3 = (int)$row['q3'];
                    $q4 = (int)$row['q4'];
                    $q5 = (int)$row['q5'];
                    $q6 = (int)$row['q6'];
                    $q7 = (int)$row['q7'];

                    $sum = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7;
                    $avg = $sum / 7;
                    
                    // Logic for Color Coding
                    $color = "#28a745"; // Green for Excellent
                    if($avg < 3.5) $color = "#fd7e14"; // Orange for Average
                    if($avg < 2.0) $color = "#dc3545"; // Red for Poor
                    
                    echo "<tr>";
                    echo "<td>
                            <strong>{$row['fullname']}</strong><br>
                            <small style='color:#666;'>ID: {$row['student_id_no']}</small>
                          </td>";
                    echo "<td><span class='badge'>{$row['category']}</span></td>";
                    echo "<td><u>{$row['target_name']}</u></td>";
                    echo "<td style='text-align:center; font-weight:bold; color: $color;'>
                            " . number_format($avg, 1) . " / 5
                          </td>";
                    echo "<td>" . (empty($row['comments']) ? '<em>No comments</em>' : $row['comments']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='text-align:center;'>No feedback records found.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <br>
    <div style="margin-top:20px;">
        <a href="../dashboard/adminDash.php" class="btn" style="text-decoration:none; padding: 10px 20px; background:#6c757d; color:white; border-radius:5px; margin-right: 10px">
             Back to Dashboard
        </a>
        <button onclick="window.print()" class="btn" style="width: 150px;background:#17a2b8; color:white; padding: 10px 20px; border:none; border-radius:5px; cursor:pointer;">
            Print Report
        </button>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
