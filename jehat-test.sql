-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 06:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jehat-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_id`, `user_name`, `activity`, `created_at`, `updated_at`) VALUES
(1, '1', 'Admin', 'تم اضافه اسئله شائعه جديده', '2022-10-31 06:24:16', '2022-10-31 06:24:16'),
(2, '1', 'Admin', 'تم تعديل  اسئله شائعه', '2022-10-31 06:31:17', '2022-10-31 06:31:17'),
(3, '1', 'Admin', 'تم اضافه قسم جديده', '2022-11-09 08:42:07', '2022-11-09 08:42:07'),
(4, '1', 'Admin', 'تم اضافه قسم جديده', '2022-11-10 07:25:50', '2022-11-10 07:25:50'),
(5, '1', 'Admin', 'تم اضافه قسم جديده', '2022-11-10 07:26:00', '2022-11-10 07:26:00'),
(6, '1', 'Admin', 'تم اضافه قسم جديده', '2022-11-10 07:26:15', '2022-11-10 07:26:15');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_ar`, `name_en`, `parent_id`, `created_at`, `updated_at`) VALUES
(27, 'منصة المستفيد', NULL, 0, '2022-10-25 11:16:47', '2022-10-27 08:50:17'),
(28, 'طلباتي', NULL, 27, '2022-10-25 11:17:51', '2022-10-25 11:17:51'),
(29, 'منصة الموظف', NULL, 0, '2022-10-25 11:18:41', '2022-10-27 08:51:02'),
(30, 'الاجتماعات', NULL, 29, '2022-10-25 11:19:01', '2022-10-25 11:19:01'),
(31, 'اضافة اجتماع', NULL, 30, '2022-10-25 11:19:21', '2022-10-25 11:19:21'),
(32, 'خطاباتي', NULL, 27, '2022-10-25 11:27:05', '2022-10-25 11:27:05'),
(33, 'شرح خطاباتي', NULL, 32, '2022-10-25 11:27:37', '2022-10-25 11:27:37'),
(34, 'إضافة خطاب', NULL, 32, '2022-10-25 11:27:58', '2022-10-25 11:27:58'),
(35, 'المفوضين', NULL, 27, '2022-10-25 11:28:36', '2022-10-25 11:28:36'),
(36, 'شرح المفوضين', NULL, 35, '2022-10-25 11:28:58', '2022-10-25 11:28:58'),
(37, 'إضافة مفوض', NULL, 35, '2022-10-25 11:29:18', '2022-10-25 11:29:18'),
(38, 'إنشاء جهة', NULL, 27, '2022-10-25 11:30:11', '2022-10-25 11:30:11'),
(39, 'شرح إنشاء جهة', NULL, 38, '2022-10-25 11:30:29', '2022-10-25 11:30:29'),
(40, 'مواعيدي', NULL, 27, '2022-10-25 11:30:48', '2022-10-25 11:30:48'),
(41, 'شرح مواعيدي', NULL, 40, '2022-10-25 11:33:07', '2022-10-25 11:33:07'),
(42, 'إضافة موعد', NULL, 40, '2022-10-25 11:33:39', '2022-10-25 11:33:39'),
(43, 'البيانات الشخصية', NULL, 27, '2022-10-25 11:39:59', '2022-10-25 11:39:59'),
(44, 'عرض البيانات الشخصية', NULL, 43, '2022-10-25 11:41:39', '2022-10-25 11:41:39'),
(45, 'عرض طلباتي', NULL, 28, '2022-10-25 11:42:58', '2022-10-25 11:42:58'),
(46, 'إضافة طلب', NULL, 28, '2022-10-25 11:43:20', '2022-10-25 11:43:20'),
(47, 'اجتماعاتي', NULL, 27, '2022-10-25 11:43:46', '2022-10-25 11:43:46'),
(48, 'حضور الاجتماع', NULL, 47, '2022-10-25 11:44:21', '2022-10-25 11:44:21'),
(49, 'المستندات', NULL, 27, '2022-10-25 11:45:31', '2022-10-25 11:45:31'),
(50, 'شرح إضافة مستند', NULL, 49, '2022-10-25 11:45:55', '2022-10-25 11:45:55'),
(51, 'خطابات واردة بغرض الاعتماد', NULL, 27, '2022-10-25 11:46:19', '2022-10-26 07:27:23'),
(52, 'معرفة حالة الخطابات الواردة', NULL, 51, '2022-10-25 11:46:43', '2022-10-25 11:46:43'),
(54, 'خطابات', NULL, 29, '2022-10-27 08:54:05', '2022-10-27 08:54:05'),
(55, 'اضافة خطاب', NULL, 54, '2022-10-27 08:56:49', '2022-10-27 08:56:49'),
(56, 'خطاباتى', NULL, 54, '2022-10-27 08:57:35', '2022-10-27 08:57:35'),
(57, 'كل خطابات الموظفين', NULL, 54, '2022-10-27 08:58:25', '2022-10-27 08:58:25'),
(58, 'خطابات واردة بغرض التصديق', NULL, 54, '2022-10-27 08:59:00', '2022-10-27 08:59:00'),
(59, 'خطابات وارده بغرض الاعتماد', NULL, 54, '2022-10-27 08:59:35', '2022-10-27 08:59:35'),
(60, 'اعدادات', NULL, 29, '2022-10-27 09:00:05', '2022-10-27 09:00:05'),
(61, 'الجهات', NULL, 60, '2022-10-27 09:00:49', '2022-10-27 09:00:49'),
(62, 'أنواع المعاملات', NULL, 60, '2022-10-27 09:01:05', '2022-10-27 09:01:05'),
(63, 'المستفيدين', NULL, 29, '2022-10-27 09:01:38', '2022-10-27 09:01:38'),
(64, 'عرض المستفيدين', NULL, 63, '2022-10-27 09:02:56', '2022-10-27 09:03:57'),
(65, 'تقرير تسجيل المستفيدين', NULL, 63, '2022-10-27 09:03:30', '2022-10-27 09:03:30'),
(66, 'احصائيات', NULL, 29, '2022-10-27 09:24:02', '2022-10-27 09:24:02'),
(67, 'احصائيات عامة', NULL, 66, '2022-10-27 09:24:45', '2022-10-27 09:24:45'),
(70, 'معاملات', NULL, 29, '2022-10-27 09:30:36', '2022-10-27 09:30:36'),
(71, 'اضافة طلب', NULL, 70, '2022-10-27 09:31:00', '2022-10-27 09:31:00'),
(72, 'المعاملات', NULL, 70, '2022-10-27 09:31:18', '2022-10-27 09:31:18'),
(73, 'طلب تاجيل المعاملات', NULL, 70, '2022-10-27 09:31:44', '2022-10-27 09:31:44'),
(74, 'مراجعة  معاملات موظف', NULL, 70, '2022-10-27 09:32:03', '2022-10-27 09:32:03'),
(75, 'معاملات لفت النظر', NULL, 70, '2022-10-27 09:32:21', '2022-10-27 09:32:21'),
(76, 'معاملات منجزة', NULL, 70, '2022-10-27 09:32:41', '2022-10-27 09:32:41'),
(77, 'نقل المعاملات', NULL, 70, '2022-10-27 09:32:59', '2022-10-27 09:32:59'),
(78, 'الفواتير', NULL, 29, '2022-10-27 09:42:22', '2022-10-27 09:42:22'),
(79, 'إضافة فاتورة مبيعات', NULL, 78, '2022-10-27 09:42:44', '2022-10-27 09:42:44'),
(80, 'فواتيري', NULL, 78, '2022-10-27 09:43:00', '2022-10-27 09:43:00'),
(81, 'كل فواتير الموظفين', NULL, 78, '2022-10-27 09:43:32', '2022-10-27 09:43:32'),
(82, 'الأصناف', NULL, 78, '2022-10-27 09:43:53', '2022-10-27 09:43:53'),
(83, 'التقييم', NULL, 29, '2022-10-27 09:44:41', '2022-10-27 09:44:41'),
(84, 'إعدادات تقييم الموظفين', NULL, 83, '2022-10-27 09:45:11', '2022-10-27 09:45:11'),
(85, 'عرض تقييم الموظفين', NULL, 83, '2022-10-27 09:45:36', '2022-10-27 09:45:36'),
(86, 'المفكرة', NULL, 29, '2022-10-27 09:45:59', '2022-10-27 09:45:59'),
(87, 'اضافة موعد', NULL, 86, '2022-10-27 09:46:37', '2022-10-27 09:46:37'),
(88, 'عرض مواعيدي', NULL, 86, '2022-10-27 09:47:20', '2022-10-27 09:47:20'),
(89, 'مراجعة مواعيد موظف', NULL, 86, '2022-10-27 09:47:55', '2022-10-27 09:47:55'),
(90, 'العملاء والاقسام', NULL, 29, '2022-10-27 09:52:03', '2022-10-27 09:52:03'),
(91, 'اضافة عميل او قسم داخلي', NULL, 90, '2022-10-27 09:52:21', '2022-10-27 09:52:21'),
(92, 'العملاء والاقسام الداخلية', NULL, 90, '2022-10-27 09:53:37', '2022-10-27 09:53:37'),
(93, 'المرفقات', NULL, 90, '2022-10-27 09:53:55', '2022-10-27 09:53:55'),
(94, 'اجتماعات', NULL, 29, '2022-10-27 09:54:13', '2022-10-27 09:54:13'),
(95, 'اضافة الاجتماع', NULL, 94, '2022-10-27 09:55:04', '2022-10-27 09:55:04'),
(96, 'كل الاجتماعات', NULL, 94, '2022-10-27 09:55:23', '2022-10-27 09:55:23'),
(97, 'الموظفين', NULL, 29, '2022-10-27 09:55:43', '2022-10-27 09:55:43'),
(98, 'اضافة موظف', NULL, 97, '2022-10-27 09:56:09', '2022-10-27 09:56:09'),
(99, 'موظفين', NULL, 97, '2022-10-27 09:56:59', '2022-10-27 09:56:59'),
(100, 'سجل الموظف', NULL, 97, '2022-10-27 09:57:22', '2022-10-27 09:57:22'),
(103, 'إضافة المستفيدين', NULL, 63, '2022-11-01 10:06:51', '2022-11-01 10:06:51'),
(104, 'طلبات الجهات المعلقة', NULL, 97, '2022-11-01 10:09:51', '2022-11-01 10:09:51'),
(105, 'موظفي الجهات', NULL, 97, '2022-11-01 10:11:22', '2022-11-01 10:11:22'),
(106, 'مجموعات الموظفين', NULL, 97, '2022-11-01 10:13:01', '2022-11-01 10:13:01'),
(107, 'اعدادات البريد الإلكتروني', NULL, 60, '2022-11-01 10:15:16', '2022-11-01 10:15:16'),
(108, 'الحد الأقصى للمعاملات', NULL, 60, '2022-11-01 10:16:54', '2022-11-01 10:16:54'),
(109, 'الحالة', NULL, 60, '2022-11-01 10:18:29', '2022-11-01 10:18:29'),
(110, 'الرعاة', NULL, 60, '2022-11-01 10:19:47', '2022-11-01 10:19:47'),
(111, 'تقرير الجهات', NULL, 60, '2022-11-01 10:21:39', '2022-11-01 10:21:39'),
(112, 'المستفيد الافتراضي لإضافة معاملة', NULL, 60, '2022-11-01 10:24:22', '2022-11-01 10:24:22'),
(113, 'اعدادات النظام', NULL, 60, '2022-11-01 10:26:27', '2022-11-01 10:26:27'),
(114, 'الصلاحيات', NULL, 29, '2022-11-02 06:59:57', '2022-11-02 06:59:57'),
(115, 'صلاحيات القوائم', NULL, 114, '2022-11-02 07:00:41', '2022-11-02 07:00:41'),
(116, 'صلاحيات الكنترول', NULL, 114, '2022-11-02 07:01:14', '2022-11-02 07:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name_ar`, `name_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'مجموعة شركات جندلة', 'مجموعة شركات جندلة', '202211092143logo.png', '2022-11-09 08:41:46', '2022-11-09 19:43:58'),
(2, 'منصه جهات', 'Jehate', '202211200910logo-5.png', '2022-11-20 07:10:28', '2022-11-20 07:10:28'),
(3, 'شركة أصول للاتصالات', 'Osool Company', '202211200911logo.png', '2022-11-20 07:11:54', '2022-11-20 07:11:54');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `company_id`, `name_ar`, `name_en`, `created_at`, `updated_at`) VALUES
(1, '1', 'it', 'cat1', '2022-11-09 08:42:07', '2022-11-09 08:42:07'),
(2, '1', 'hr', 'قفقف', '2022-11-10 07:25:50', '2022-11-10 07:25:50'),
(3, '1', 'Account', 'قثفثفق', '2022-11-10 07:26:00', '2022-11-10 07:26:00'),
(4, '1', 'Mangers', 'اتالتبلالتلات', '2022-11-10 07:26:15', '2022-11-10 07:26:15');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meeting_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whats_app` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `company_id`, `department_id`, `event_id`, `name`, `position`, `meeting_link`, `email`, `whats_app`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', 1, 1, 'احمد على محمود', 'مقيم عقارى', 'https://app.jndlh.com.sa/jan-cgv-bbx-4bp', 'ahmed@ex.com', '112845789', '202211101248card.png', '2022-11-10 10:45:23', '2022-11-20 07:24:30'),
(2, '1', 1, NULL, 'Admin', 'test1', 'http://127.0.0.1:8000/employees/create', 'admin1@ex.com', '213233222132', '202211101246card.jpeg', '2022-11-10 10:46:21', '2022-11-10 10:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name_ar`, `name_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'المعرض الافتراضى للمقيمين العقاريين', 'المعرض الافتراضى للمقيمين العقاريين', '202211200914images.jpg', '2022-11-20 06:24:51', '2022-11-20 07:14:15'),
(2, 'المعرض الافتراضى للمحامين', 'المعرض الافتراضى للمحامين', '202211200914download.jpg', '2022-11-20 07:14:55', '2022-11-20 07:14:55'),
(3, 'المعرض الافتراضى للمحاسبين القانونين', 'المعرض الافتراضى للمحاسبين القانونين', '202211200915download (1).jpg', '2022-11-20 07:15:38', '2022-11-20 07:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `category_id`, `question_ar`, `question_en`, `answer_ar`, `answer_en`, `created_at`, `updated_at`) VALUES
(2, 'انشاء حساب', 'كيف انشأ حساب؟', NULL, 'الذهاب الى jehat.sa وثم سجل كمستفيد واحجز مكتبك الافتراضي وثم اظغط على كلمه اضغط هنا وثم اظغط على مستخدم جديد وإملاء البيانات .', NULL, '2022-10-31 08:47:16', '2022-11-02 06:58:14'),
(3, 'اظهار كلمه مكتبي', 'لماذا لاتظهر لي كلمه مكتبي في الايقونات؟', NULL, 'بعد التسجيل في الموقع يتم اضافه المستفيد كا موظف في الجهه التابعه لديه وثم تظهر كلمه مكتبي .', NULL, '2022-10-31 08:51:49', '2022-11-02 06:37:12'),
(7, 'مراجعه الاجتماع بعد غلقه', 'هل يمكنني مراجعه الاجتماع بعد غلقه؟', NULL, 'نعم يمكنك اذا كنت مستفيد تذهب الى الرئيسيه ثم اجتماعات ، واذا كنت مسجل تذهب الى الرئيسيه ثم مكتبي ثم اجتماعات ثم كل الاجتماعات .', NULL, '2022-11-02 06:38:06', '2022-11-02 06:38:06'),
(8, 'اسناد المعاملات', 'هل يمكنني اسناد المعاملات؟', NULL, 'نعم بعد الانتهاء من المعامله تذهب الى معاملاتي وتذهب الى المعامله التي انشأتها للتو ستظهر لك طلب اسناد في نصف الصفحه .', NULL, '2022-11-02 06:39:41', '2022-11-02 06:39:41'),
(9, 'طباعه الاجتماع', 'هل يمكن طباعه الاجتماع؟', NULL, 'يمكنك ، بعد الانتهاء من الاجتماع تذهب الى اجتماعك في اخرالصفحه توجد كلمه طباعه التقرير ويوجد فيه تقنيه الـQR أيضا .', NULL, '2022-11-02 06:40:25', '2022-11-02 06:40:25'),
(10, 'الخصوصيه', 'هل منصة جهات تحمي لي خصوصيتي وهل يستطيع احد الإطلاع على بياناتي؟', NULL, 'منصة جهات تتمتع بالخصوصية وهي قادرة على حماية بياناتك تماما.', NULL, '2022-11-02 06:49:15', '2022-11-02 06:52:28'),
(11, 'الهدف من المنصه', 'مالهدف الرئيسي من منصة جهات؟', NULL, 'الهدف الرئيسي من منصه جهات هي كل المنصات التي يريدها كل شخص مقيم او مواطن شركه او قطاع حكومي او جمعيات خيريه جميعها في منصه واحده ويمكن ارسال أي طلب لاي مستفيد من المنصه.', NULL, '2022-11-02 06:49:51', '2022-11-02 06:49:51'),
(12, 'استفاده المستفيد', 'مالذي استفيد منه كمستفيد في المنصة؟', NULL, 'لدينا خدمات كثيره في المنصه مثلا الفاتوره الاكترونيه او نظام اداري كامل يعمل على المنشأه لديك , الاستفاده كمستخدم أيضا ان ارسال الرسائل عبر المنصه افضل من البريد الاكتروني غالبا لاتظهر فيه الرسائل.', NULL, '2022-11-02 06:50:29', '2022-11-02 06:50:29'),
(13, 'بديل البريد الالكتروني', 'هل تغني منصة جهات عن تداول المعاملات عن طريق الايميلات ؟', NULL, 'تغنيك منصة جهات عن تداول او ارسال المعاملات عن طريق البريد الاكتروني.', NULL, '2022-11-02 06:51:13', '2022-11-02 06:51:13'),
(14, 'انشاء اجتماع', 'كيف يمكنني انشاء اجتماع ؟', NULL, 'تذهب الى خانه مكتبي ثم الايقونات على يمين الصفحه اجتماعات وثم اضافه اجتماع .', NULL, '2022-11-02 06:53:15', '2022-11-02 06:53:15'),
(15, 'اضافة اعضاء بالاجتماع', 'كيف يمكنني اضافة اعضاء بالاجتماع ؟', NULL, 'في صفحه اضافه اجتماع في اسفل الصفحه توجد البحث عن عضو ملاحظه يجب على من يتم اضافته في الاجتماع ان يسجل في المنصه الأول وثم يتم اضافته في الاجتماع .', NULL, '2022-11-02 06:53:59', '2022-11-02 06:53:59'),
(16, 'التصويت بالاجتماع', 'هل يستطيع جميع الاعضاء بالاجتماع التصويت ؟', NULL, 'نعم ، تذهب الى مكتبي وثم الايقونات على اليمين الاجتماعات ثم كل الاجتماعات تذهب الى الاجتماع المراد التصويت عليه وثم في اسفل الصفحه حضور الاجتماع وثم في اسفل الصفحه كلمه تصويت .', NULL, '2022-11-02 06:54:51', '2022-11-02 06:54:51'),
(17, 'اضافة موظف', 'كيف يمكن اضافة موظف ؟', NULL, 'الذهاب الى مكتبي ثم الايقونات على يمين الصفحه وثم اختيار الموظفين-اضافه موظف .', NULL, '2022-11-02 06:55:33', '2022-11-02 06:55:33'),
(18, 'تعديل البيانات للموظفين', 'كيف يمكن تعديل البيانات للموظفين ؟', NULL, 'الذهاب الى مكتبي ثم الايقونات على يمين الصفحه وثم ايقونه الموظفين-الموظفين ثم تكتب اسم الموظف المراد تعديل البيانات عليه ثم ايقونه القلم على اليمين .', NULL, '2022-11-02 06:56:15', '2022-11-02 06:56:15'),
(19, 'الخصوصيه في المعاملات', 'هل توجد خصوصيه في المعاملات؟', NULL, 'نعم توجد خصوصيه ، بعد كتابه المعامله لديك تذهب الى سري في اسفل الصفحه وثم حدد الموظف المستقبل لهذه المعامله .', NULL, '2022-11-02 06:56:50', '2022-11-02 06:56:50'),
(20, 'الاستفسار في سؤال غير متوفر', 'لم اجد سؤالي هنا', NULL, 'اذا لم تجد سؤالك هنا يمكنك التواصل معنا عبر الواتس اب 966533384491+', NULL, '2022-11-02 06:57:26', '2022-11-02 06:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2022_10_11_093247_create_categories_table', 1),
(22, '2022_10_11_093424_create_pages_table', 1),
(23, '2022_10_11_100237_create_activity_logs_table', 1),
(24, '2022_10_20_075918_create_companies_table', 1),
(25, '2022_10_20_080043_create_employees_table', 1),
(26, '2022_10_31_075046_create_faq_table', 1),
(27, '2022_11_09_094206_create_departments_table', 2),
(28, '2022_11_20_082211_create_events_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `slug_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$i9Cgj65NQwu6Iwvk/ASLEuXJZXl2F19lUsj6BP6TYlXwcuql/8ZWO', NULL, '2022-10-31 05:58:38', '2022-10-31 05:58:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
