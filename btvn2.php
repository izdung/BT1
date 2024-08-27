<!-- 1.Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen(). -->
<?php
echo strlen("Hello Earth") . '<br>'; 
?>

<!-- 2. Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count(). -->
<?php
echo str_word_count("Hello Earth")  . '<br>';
?>

<!-- 3. Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev(). -->
<?php
echo strrev("Hello Earth") . '<br>';
?>

<!-- 4. Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos(). -->
<?php
echo strrpos("Hello earth","earth") . '<br>';
?>

<!-- 5. Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace(). -->
<?php
echo str_replace("World","Earth","Hello World") . '<br>';
?>

<!-- 6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp(). -->
<?php
echo strncmp("Hello World!","Hello Earth!",6) . '<br>';
?>

<!-- 7. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper(). -->

<?php
echo strtoupper("Hello Earth") . '<br>';
?>

<!-- 8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower(). -->
<?php
echo strtolower("Hello Earth") . '<br>';
?>

<!-- 9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords(). -->
<?php
echo ucwords("hello earth") . '<br>';
?>

<!-- 10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim(). -->
<?php
$str = " Hello World ";
echo trim($str," ") . '<br>';
?>

<!-- 11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim(). -->
<?php
echo rtrim("   Hello Earth") . '<br>';
?>

<!-- 12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim(). -->
<?php
echo rtrim("Hello World   ") . '<br>';
?>

<!-- 13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode(). -->
<?php
$str = "Hello world and earth.";
print_r (explode(" ",$str));
echo "<br>";
?>

<!-- 14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode(). -->
<?php
$InputArr = array('dog', 'cat', 'mouse');
echo implode(", ",$InputArr) . '<br>';
?>

<!-- 15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad(). -->
<?php
$str = "Hello Earth";
echo str_pad($str,18,"-") . '<br>';
?>

<!-- 16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr(). -->
<?php
echo strchr("Hello Earth","Earth") . '<br>';
?>

<!-- 17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr(). -->
<?php
echo strstr("Hello Earth","Earth") . '<br>';
?>

<!-- 18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số
bằng một ký tự khác sử dụng hàm preg_replace(). -->
<?php
$partern = '/hello/';
$subject = 'hello world hello earth';
$replacement = 'hi';
echo preg_replace($partern, $replacement, $subject) . '<br>';
?>

<!-- 19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int(). -->
<?php $var = 24;
if (is_int($var)) {
    echo 'Biến thuộc kiểu số nguyên';
}else{
    echo 'Biến không thuộc kiểu số nguyên';
};
echo "<br>";
?>

<!-- 20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm
filter_var(). -->
<?php
$email = "abcd@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email hợp lệ.";
} else {
    echo "Email không hợp lệ.";
}
?>



