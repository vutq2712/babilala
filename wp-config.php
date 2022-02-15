<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'babilala' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wZd(6e`5%I`Pt(}mraa/sVm*Z.tNsnL(;i%<Y3gcV%h=vhw$s!n{!+BsNup}3thu' );
define( 'SECURE_AUTH_KEY',  '3=u|d@Cu-c3C#[xQ2O%1>XE-*NR*0[:$/ur:]n7L$yN[6$*/kS4b#w4p&t)&ST@W' );
define( 'LOGGED_IN_KEY',    'DA@r-;IgCuHr$f;5fwkvq3?`n@4MmNZ{[czK/2-5TAm&*dE}jC6+Z1;[giS!VPV`' );
define( 'NONCE_KEY',        'V^ksj;ol%yH~VZV.,l>&s^/6CT&-vt*/1JF_|&_1TE`HX5+He!W>@) {@my6]_W!' );
define( 'AUTH_SALT',        'Z;:JH1a401Q2Iy;HhJtfjO9tx88P?l!-8GVu..q8!.n.u2arA:ANN|F,2VMoyh7p' );
define( 'SECURE_AUTH_SALT', '3$1j1[vgvjZ0FN%q2w}z9w5jeWd/0oUPr,Auo%1H@G8?,d1|,qJAx1axW,2t~]kj' );
define( 'LOGGED_IN_SALT',   '=J9S5,]wpfn4OE7^py>afkZ*:Jr<q) ,4GpS4Mv+V?`n(V*.oEV?,uzRRa9,KJRK' );
define( 'NONCE_SALT',       '5ysi2O9}5U6^$3Lk>5D,v5gI>YAn;}6U]<RoP5pXI/D,);$BOoC~pYt.1~e.]!<]' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'bb_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
