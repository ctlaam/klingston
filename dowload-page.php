<?php
/*
Template Name: Download Page
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        download - page
        <?php
        // Kiểm tra xem tham số id có tồn tại trong URL không
        if (isset($_GET['id'])) {
            // Lấy giá trị của tham số id
            $idValue = sanitize_text_field($_GET['id']);

            // Hiển thị giá trị id
            echo 'ID value: ' . $idValue;

            // Để sử dụng giá trị id trong các phần khác của mã PHP, bạn có thể gán nó vào biến
            $myId = $idValue;
            echo 'My ID: ' . $myId;
        }
        ?>

    </main>
    <script>
        // Lấy giá trị của tham số id từ URL
        var idValue = new URLSearchParams(window.location.search).get('id');
        // Kiểm tra nếu có giá trị id
        if (!idValue) {
            window.location.href = 'https://klingston.de/';
        }
    </script>
</div>

<?php get_footer(); ?>