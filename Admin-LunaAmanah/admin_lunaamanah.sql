-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2023 pada 13.18
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_lunaamanah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Haji', 'haji', '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(2, 'Umrah', 'umrah', '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(3, 'Tour', 'tour', '2023-01-01 06:25:53', '2023-01-01 06:25:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_06_110948_create_categories_table', 1),
(6, '2022_12_06_111951_create_posts_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Ut eum aut dolorem dolores eum.', 'voluptatem-reiciendis-neque-accusantium-rerum-voluptas-adipisci-id', NULL, 'Et autem sapiente nam exercitationem. Sunt nam vitae iure incidunt assumenda.', '<p>Eos voluptas quod quasi molestiae. Recusandae voluptatem quis saepe harum consectetur voluptas.</p><p>Dolores repellendus velit placeat ab ratione eos omnis ducimus. Voluptate eius voluptas et et quis rerum facere. Nam omnis omnis in similique aspernatur.</p><p>Aliquam neque voluptate modi harum ut. Numquam eum sint corporis quo voluptatibus. Voluptate architecto voluptatem quia eos ratione. Est quisquam tempora molestiae id suscipit quas.</p><p>Mollitia voluptas ea eaque ut. Voluptatem omnis saepe occaecati perferendis minus. In eos qui voluptas labore.</p><p>Dolores laborum illo fugiat sit non libero. Eligendi distinctio qui temporibus delectus voluptatem asperiores exercitationem ratione. Ducimus quia qui voluptatem voluptas a aut mollitia officiis.</p><p>Voluptatem et voluptatem tempora id enim porro nihil. Dolorem nihil eius dolor molestiae voluptas unde nihil. Quis omnis dolore nemo perspiciatis minima quia.</p><p>Harum et reprehenderit tempore autem commodi ut facere quam. Ex quo eum ducimus dolore at asperiores quisquam. Veniam rerum ut quas cupiditate.</p><p>Molestias soluta id exercitationem qui. Et quis et porro veritatis dicta harum. Quae laboriosam numquam eligendi veniam aperiam illo dolores. Vel et odit exercitationem pariatur consequuntur pariatur laborum.</p><p>Recusandae reiciendis et et. Accusamus quia eos aliquid laudantium aut voluptatibus. Officia eius facilis nobis voluptatem accusantium commodi porro.</p><p>Illo sit non iste odio. Labore quae qui magnam ea corrupti aut. Architecto labore mollitia est odio id qui.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(2, 2, 1, 'Non reiciendis debitis quasi.', 'pariatur-qui-sunt-consequatur-ut', NULL, 'Sed reprehenderit at est vero. Aut consequatur hic ducimus. Sed fugiat expedita quis ut natus non beatae. Ut vitae rerum nisi dolores facere.', '<p>Magni porro adipisci rem laudantium dolores ut est. Et tempora consequuntur harum repellat. Molestiae voluptates et autem. Odit ut ut incidunt sit dolor.</p><p>Consequatur quae maiores nostrum sunt provident in. Saepe natus at officia magnam iusto maiores. Quis fuga aut rem minus perspiciatis.</p><p>Quia omnis et quo saepe aliquam harum. Facilis et eos et voluptatum nesciunt. Nulla vel sunt saepe omnis deleniti delectus.</p><p>Omnis repellat rerum ea non. Numquam sed impedit et voluptate architecto. Sit alias voluptatum deleniti dicta.</p><p>Eligendi labore qui quae fugit sit ea. Velit consequatur suscipit exercitationem eos aliquam. Autem eum ut omnis tempora quos nihil minus. Corporis dolor minima fugiat saepe dolores est quasi error.</p><p>Distinctio minima omnis praesentium minima et. Provident quia nostrum cumque rem ullam deleniti. Quia non libero adipisci nihil similique. Deleniti quibusdam qui rerum iure animi.</p><p>Eius deleniti harum deserunt sed neque. Quis et deleniti minus explicabo. Aspernatur cum commodi nisi autem est vitae rerum. Reiciendis iure eos corrupti vero adipisci quis.</p><p>Explicabo tempore velit alias atque et. Illum libero non perspiciatis necessitatibus. Non ut doloribus minus quis omnis consectetur ad. Deserunt occaecati sed veniam quibusdam aut ducimus.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(3, 3, 1, 'Rerum mollitia id assumenda nam mollitia enim.', 'sit-sunt-unde-exercitationem', NULL, 'Et reiciendis animi accusantium quisquam omnis accusamus. Quam necessitatibus et aliquam possimus. Et quam et eveniet aut. Deleniti ut accusamus a ullam ut accusantium quae. Vel sit eum voluptas molestiae quisquam optio.', '<p>Laborum rerum et perspiciatis ipsam beatae. Commodi temporibus nisi expedita sed. Explicabo esse unde neque natus fuga. Natus voluptatem rerum quae impedit ab. Dolor ad natus natus earum vitae at laborum voluptatum.</p><p>Ab quia nisi et eos tempora. Nam ipsa velit occaecati nemo ex fugit. Ut praesentium quia odit itaque.</p><p>Voluptas autem impedit et nostrum nihil illum nesciunt. Cumque possimus voluptates mollitia et in vel officiis nemo. Voluptatibus quae facere rerum.</p><p>Reprehenderit aliquid sed voluptatem a rerum nemo. Sed et occaecati minus praesentium deserunt dolor voluptatem voluptatum. Ab et occaecati natus nostrum in voluptatem.</p><p>Iusto assumenda alias inventore quam. Vero in vitae quam necessitatibus omnis eum autem. In molestiae cumque soluta tempore animi beatae est totam. Eum rerum ut porro rem enim. Nihil consectetur earum omnis voluptates accusamus.</p><p>Libero ea eum occaecati consequatur omnis impedit explicabo rerum. Numquam officiis ut deleniti hic incidunt nemo. Assumenda natus quis et. Exercitationem sit nemo sequi.</p><p>Quia incidunt ipsam harum pariatur. Unde rem eum laborum odio. Qui voluptas quas architecto dolorum animi sint qui. Deleniti asperiores optio aut mollitia eaque.</p><p>Enim assumenda ut enim sit sed eum doloribus. Dolorem aliquam ipsa voluptatem illo. Facilis facilis sunt ducimus corrupti qui. Accusantium quis suscipit corrupti quis numquam dolores.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(4, 2, 1, 'Debitis sit eligendi sunt.', 'qui-dicta-commodi-eligendi-quaerat-ut', NULL, 'Quas odit libero enim alias. Quidem culpa maxime dolorem soluta. Ipsum nihil necessitatibus esse at qui sed occaecati. Exercitationem id praesentium sed animi voluptate earum et dolorum. Qui qui amet quia sint tenetur pariatur blanditiis.', '<p>Ipsa recusandae laudantium ducimus rerum sed quo. Blanditiis voluptatem voluptatem vitae et nihil dolor at autem. Esse explicabo est qui voluptates fuga rerum est.</p><p>Impedit accusamus sed aut non in. Quia error ea non sint. Voluptas et dolor quia at illum. Impedit eligendi tempore earum consequuntur pariatur dolor aliquid.</p><p>Deleniti odit iste veritatis non modi dolorum et. Perferendis aspernatur vitae aut qui laborum eos et. Quia maxime corrupti ipsam vero cumque cupiditate eos dolores. Eius molestiae voluptatem voluptate esse error beatae sapiente.</p><p>Sapiente ipsa unde voluptatem ut tempore quaerat commodi. Et velit sunt aliquam officiis et veritatis dolores. Maxime eveniet laudantium facilis hic facilis quasi vel. Consequatur voluptate a corporis alias nam occaecati voluptate explicabo.</p><p>Voluptates unde quam odio accusantium deserunt sed sunt. Quae rerum rerum est. Quis explicabo exercitationem qui. Fugit maiores nemo veritatis qui ut quidem.</p><p>Voluptatem sit aliquam quisquam et dolores voluptas. Voluptas deleniti dolores ducimus sunt sunt. Minima vel quia tempora necessitatibus.</p><p>Dignissimos placeat ex dolor nihil. Culpa fugiat officia voluptas maiores. Voluptatem quia voluptate et consequatur reprehenderit. Odio corporis ipsam est.</p><p>Nam est itaque blanditiis animi suscipit repellat nemo laboriosam. Temporibus debitis itaque hic ut alias sequi sed consequatur. Cumque omnis amet iusto nam et magnam.</p><p>Ea quis minus rerum ullam est qui soluta. Est voluptates error hic ipsum in. Aspernatur a quia qui et et voluptatem qui. Dolore deleniti sint officia saepe.</p><p>Aut inventore sit sed blanditiis. Non dolor est voluptatem delectus distinctio temporibus. Temporibus voluptatem qui voluptatem est voluptas iste ut.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(5, 3, 1, 'Aperiam doloremque rerum dolore veritatis numquam.', 'in-necessitatibus-alias-est-accusantium-tempore-error-exercitationem', NULL, 'Pariatur quam adipisci cupiditate rerum quos et. Non officia sit eligendi neque omnis deserunt nihil esse. Illum voluptatum est enim repellat neque nostrum repudiandae.', '<p>Pariatur ducimus laborum nostrum. Odio asperiores fugiat error corrupti tenetur. Et ex tempora et ea. Aut modi nam unde sit iste.</p><p>Quo inventore dolore corporis. Autem consectetur sapiente qui et dolores. Doloremque ut assumenda eos minus. Dolore rem sapiente sed id sed.</p><p>Dolor quasi temporibus nobis pariatur. Magnam dolore enim iure quasi. Non pariatur aut deserunt amet sunt. A voluptatem quia ut et facilis sunt. Nobis et eius numquam consequatur.</p><p>Explicabo quo soluta beatae nobis. Alias dicta quia est necessitatibus deleniti. Molestiae et corrupti sequi asperiores. Quod corrupti similique consequatur sunt. Nostrum dolorem voluptatum blanditiis voluptatem qui.</p><p>Enim maiores quo error enim. Reiciendis quod nemo debitis delectus vitae ipsum. Ab ad distinctio qui consequatur eaque ab.</p><p>Cupiditate enim quia laborum et eligendi neque et. Expedita vitae non nostrum ab et fuga quae. Repudiandae et reiciendis fuga beatae commodi sapiente quos sed. Aut fuga distinctio molestiae et explicabo et.</p><p>Beatae animi temporibus nisi rerum ducimus atque. Delectus laboriosam qui accusamus veritatis quis nam sequi consequatur. Repudiandae porro harum sunt aperiam autem sed.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(6, 2, 1, 'Dolore aut minima.', 'distinctio-sequi-excepturi-rerum-commodi-ducimus-esse-in-eum', NULL, 'Qui mollitia rem quia aut nihil velit. Dolor veniam doloribus facere nulla sed possimus. Est aliquid mollitia odio aut harum ipsa. Delectus voluptatem ipsa esse ipsam.', '<p>Quisquam dolor id occaecati et. Minima tempore doloremque nulla aspernatur ut voluptatibus et pariatur. Ea similique dolorum aliquam sit.</p><p>Ut sit eum vel consequatur pariatur. Tempora ex quisquam laboriosam pariatur reprehenderit temporibus ipsam. Illo aut et molestiae id atque sapiente et. Quas impedit omnis quas consequatur nemo.</p><p>Tenetur voluptatum non libero omnis ut tempora quibusdam. Veritatis quia a architecto et. Odit et ut debitis.</p><p>Maiores qui et culpa repellendus est. Eum nulla dolor non nihil eum odio magni. Placeat vero voluptas aut ullam quod deserunt excepturi tempora. Dolorum possimus delectus repellat rerum beatae eos.</p><p>Vel voluptatibus sit aperiam sed exercitationem cumque et. In aut ut quis ut provident beatae reprehenderit rem. Aut qui iusto animi quia quod sapiente fugit.</p><p>Sed quia et dignissimos quibusdam numquam quas perspiciatis. Eos dolorem nam adipisci deleniti ratione sunt exercitationem. Doloribus et blanditiis rem non eaque et unde. Totam qui et vel temporibus placeat cum provident consequatur.</p><p>Nemo non voluptates occaecati delectus. Rerum est in perferendis culpa magni architecto qui eligendi. Sint eaque quibusdam ut modi totam aut.</p><p>Voluptas consequatur dolor dolore fugit minima omnis quaerat. Explicabo dolor non consequatur est. Quo in rerum ipsam adipisci nobis voluptatem. Nisi sit veniam quo voluptatem.</p><p>Fugit placeat dolores quia. Iusto saepe maxime animi. Et ab facilis quia officia porro incidunt et.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(7, 3, 1, 'Quae pariatur sapiente illum.', 'sit-omnis-iste-fugiat-vero-omnis-repudiandae-amet', NULL, 'Veritatis pariatur qui sit veritatis iusto alias. Totam perferendis maiores cupiditate omnis aliquid minus odit recusandae. Alias qui aut sit quia. Deleniti asperiores numquam eos illum itaque saepe ea autem.', '<p>Non explicabo natus ut magnam temporibus unde. Voluptate maiores porro eos ut provident voluptas rerum. In aspernatur ea qui sequi corporis at. Ea eos laudantium et veritatis ut dignissimos.</p><p>Ducimus molestias voluptatem ut quidem eius iste est natus. Quia atque saepe dolore. Ea vitae a et voluptas omnis officia impedit quos. Eveniet officiis est ea culpa.</p><p>Delectus tenetur iusto sed laudantium. Eligendi autem magnam eos doloribus doloremque. Omnis est ut exercitationem autem.</p><p>Laboriosam vel aut et earum dolor omnis. Et assumenda mollitia qui ad dolorem ut error. Reiciendis rem magni impedit omnis velit et.</p><p>Perspiciatis voluptas quod est modi mollitia officia. Ea rerum voluptatibus rerum maxime. Animi consequatur veniam qui vel aut deleniti. Non facere ut aut eaque ut qui.</p><p>Sequi ab at repellendus numquam aut. Aperiam est aut eos eos quasi. Consequuntur ducimus id qui sapiente quia et recusandae in.</p><p>Sint unde in perferendis quaerat quisquam et expedita. Quasi voluptate ipsam cumque atque dolor est adipisci. Aut autem iste est voluptatem blanditiis voluptates iste.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(8, 3, 1, 'Dicta et eum similique nemo voluptas.', 'cumque-neque-quos-sed-inventore-magnam-consequatur-rerum', NULL, 'Sunt inventore repudiandae amet provident ex explicabo. Iusto recusandae dignissimos nisi vel sunt. Laborum dolor rem iste impedit dicta numquam sed at. Quasi numquam expedita voluptatem aspernatur.', '<p>Non atque eveniet amet adipisci quis enim pariatur ullam. Consequatur aut sunt et aut necessitatibus laudantium magni qui. Possimus doloremque eos ratione excepturi aspernatur tempore.</p><p>Et iure est eos nesciunt id nobis. Saepe odit facere non et.</p><p>Qui alias non explicabo enim sit. Rerum autem rerum nulla saepe cumque ut. Quos nemo ut iste suscipit. Libero porro libero in corporis qui. Ut corrupti hic dolorem et.</p><p>Pariatur aut similique delectus dolores dolores sit. Et sint et ex voluptatem adipisci eius. Distinctio error reprehenderit deleniti veritatis maiores aut est commodi.</p><p>Maxime soluta provident nam provident. Alias est praesentium ut. Laboriosam amet sunt accusamus ut aut eum minus veritatis. Nostrum fuga est vitae corrupti inventore repudiandae minus.</p><p>Qui cupiditate eius adipisci nostrum aut. Omnis aut fugit blanditiis ab hic possimus.</p><p>Perspiciatis corporis error eum omnis. Rem incidunt nihil aliquid sit.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(9, 2, 1, 'Corporis ab veniam et occaecati et.', 'debitis-voluptate-et-ullam', NULL, 'Aliquid dolorum quidem vel ea ab facilis qui sint. Molestias at hic ut maxime aliquam veniam. Ut dicta officia et.', '<p>Est quod vero et sapiente. Quo deleniti eaque quaerat temporibus corrupti. Beatae eos quisquam consequatur.</p><p>Tempore non tempora quia eligendi. Occaecati dicta enim eligendi. Autem ut ut est dolorem id sed. Voluptate dolorum ad quidem perspiciatis.</p><p>Fugit ea pariatur voluptatem nulla incidunt voluptas. Consequatur sequi rerum ut. Quaerat necessitatibus ullam provident quae quo nobis.</p><p>Autem quidem consequatur deserunt perspiciatis ut est. Aut et iure nemo. Dolorum vel quasi quasi et corporis.</p><p>Debitis ducimus nihil non nemo veritatis soluta consequatur possimus. Eos perferendis et consectetur architecto et.</p><p>Consequatur alias aut pariatur autem debitis. Voluptatem odit quia quo in ut ullam aut enim. Quos voluptatibus earum expedita et nesciunt laborum accusantium. Quia fuga repellat numquam vel enim.</p><p>Non sed numquam reiciendis aut aliquam. Et consequatur distinctio consequatur ducimus ab officia nihil. Voluptatem itaque tempora est non. Dolores beatae aperiam aut et quis dolores et.</p><p>Rem quae aut incidunt velit. Sunt enim neque et libero velit quia. Est sunt aliquid et atque repellendus consequatur.</p><p>Et qui reiciendis a expedita cupiditate voluptatum dolore architecto. Expedita dolorum consequatur dolor ullam ipsa. Rerum cumque et reprehenderit molestias est libero est. Non mollitia voluptatem natus veniam sed.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(10, 2, 1, 'In nisi.', 'placeat-vero-dolor-dolor-suscipit', NULL, 'Autem inventore soluta impedit odit reprehenderit. Ipsam unde tenetur consequatur quod mollitia soluta voluptas maiores. Ullam quia ab voluptatem sequi omnis fuga blanditiis.', '<p>Praesentium labore voluptatem magni culpa vero voluptate. Tempore qui dolores itaque sint quam necessitatibus rem. Laboriosam quia et quia qui libero.</p><p>Eos nihil id magnam commodi repellendus ut dolor. Maxime fugit odio nihil eaque. Voluptas dolores delectus incidunt omnis.</p><p>Et quis facilis tenetur omnis consectetur. Quasi rerum animi cum sequi ut temporibus cumque alias. Sed et ea blanditiis nemo. Aspernatur sint modi et labore voluptas aut officia.</p><p>Suscipit aut voluptatibus eius. Neque dolorem cum cupiditate inventore et. Voluptas earum velit iusto natus vel sint nostrum.</p><p>Minima odio aspernatur nihil at vero maxime omnis. Accusantium in fugit voluptas perspiciatis saepe fugiat voluptas. Velit et voluptas id. Saepe et recusandae aliquid voluptatem.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(11, 2, 1, 'Aut qui facilis.', 'omnis-tempora-exercitationem-non-sit', NULL, 'Nesciunt nobis esse iure. Occaecati minima temporibus quasi. Laboriosam dolores eius inventore recusandae facere.', '<p>Quisquam praesentium et sed et voluptatibus doloribus. Dolore perferendis nihil qui in deserunt ut. Alias et qui sit deleniti autem et sint.</p><p>Laborum aspernatur eos ut maiores. Aliquam eligendi dolores sequi iste consequatur laudantium. Qui tempore vel neque amet itaque quo ullam. Consequatur ut et voluptas ad quibusdam libero cupiditate.</p><p>Culpa quisquam voluptatem aut doloribus. Sunt suscipit quo veniam explicabo impedit. Ipsam porro dolor sunt quia.</p><p>Tempore est accusantium corporis sapiente quos consequatur aut. Velit laboriosam voluptatem sed ut saepe ullam reprehenderit. Explicabo porro eum expedita harum dolorem earum.</p><p>Similique illo delectus earum unde est libero. Molestias tempora ea consequuntur. Doloribus reiciendis quia rerum odio consequatur.</p><p>Error laboriosam autem nihil consequatur aut laboriosam accusamus. Illo quia voluptatem sequi voluptatem. Voluptas molestiae magni ut consequatur. Quod praesentium dignissimos doloribus est. Ex omnis eos ad maxime corporis velit quo.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(12, 1, 1, 'Numquam eveniet voluptate dolor consequatur sit quis aspernatur autem.', 'repudiandae-ratione-architecto-illum-amet', NULL, 'Qui eum hic et autem deserunt. Recusandae est beatae non natus et.', '<p>Quis suscipit voluptas molestiae quia ut. Quis nemo sequi accusantium quia itaque. Harum non ea itaque quia.</p><p>Voluptates dolorem rerum harum non necessitatibus perspiciatis quae. Quis fuga vitae maiores unde sit.</p><p>Quam vel mollitia ullam atque iste culpa similique. Aperiam laudantium suscipit accusamus odit odio libero. Repellat voluptatibus dolor tempore ea sunt esse sed.</p><p>Laboriosam pariatur voluptatem earum laudantium in culpa. Non dolore dolore dolores similique et eveniet. Eaque animi assumenda delectus quis.</p><p>Perferendis omnis aut dicta voluptatibus ut ex earum. Eos eos modi vel repellendus a incidunt vel. Reiciendis error qui optio. Sed nihil quia facere fugiat et fugiat alias quo.</p><p>Illo omnis dolores quo esse ea tempore. Praesentium temporibus quia et quas. Id eveniet delectus provident molestiae laborum quia excepturi. Et sed cumque est nihil iusto.</p><p>Similique eum ipsum et minus. Officia ipsa quisquam labore. Reiciendis suscipit accusantium quia tempora assumenda.</p><p>Omnis nulla inventore illo temporibus doloremque. Numquam rerum veniam architecto.</p><p>Possimus voluptate non culpa. Dolor voluptatum et eligendi dolorum est.</p><p>Id eum cum natus velit. Ut aut sunt occaecati ea qui. Accusamus reprehenderit temporibus aut quia.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(13, 3, 1, 'Fuga soluta dicta adipisci consectetur.', 'nobis-veniam-voluptatem-itaque-eos-fuga-eligendi-dolorem', NULL, 'Aut eligendi ea fugit rem et. Est provident et doloribus facilis iste tempora. Impedit molestiae eius amet eos.', '<p>Voluptatem sint velit deleniti et voluptas quas maiores consequatur. Dolores eum nobis nihil rerum et. Ullam vitae dolor ut voluptate.</p><p>Omnis reprehenderit ullam sint id. Consequatur alias facilis voluptatem nostrum perferendis dolorem maiores.</p><p>Explicabo qui nulla corporis voluptas harum incidunt. Architecto dignissimos nam dolorem autem consequatur perferendis repellat. Ut laboriosam et consequatur est. Perferendis debitis quasi non sint earum.</p><p>Earum incidunt vitae reiciendis. Vel accusamus atque soluta sit. Laudantium eaque enim doloremque debitis voluptatem labore. Dignissimos eos inventore reprehenderit est nesciunt.</p><p>Recusandae alias et minima qui magnam exercitationem. Commodi neque at qui amet aut. Molestias ipsam vel voluptatem illo sit. Aut perspiciatis omnis illum in.</p><p>Dolorem omnis nostrum sed tenetur. Et ea quam nihil omnis ut dolorem odit.</p><p>In eaque eos odit dolores fugit non impedit est. Dolor exercitationem maxime ut alias iure voluptates qui. Provident ut qui sit. Expedita qui quaerat repellendus velit vel magnam.</p><p>Adipisci natus consectetur neque. Dolore et sit laudantium consequuntur laudantium cum. In non possimus dolorem id dolores dolore perspiciatis. Voluptatem non praesentium iste nostrum sapiente et quae recusandae.</p><p>Et incidunt ea qui omnis suscipit placeat. Qui quas quia eum dolorem consectetur. Nostrum est quia ipsam. Consequatur hic et iure accusantium.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(14, 2, 1, 'Necessitatibus veniam aut non atque non.', 'dolores-nobis-sequi-assumenda-deserunt', NULL, 'Voluptatem aut qui reiciendis doloremque aliquam ea. Expedita doloribus necessitatibus beatae magnam et officiis vel vel. Odio quam eveniet qui est aliquid quas.', '<p>Autem eligendi cupiditate possimus ut laboriosam. Quis vero laudantium iusto. Amet magnam tempore repudiandae harum possimus qui quia deserunt.</p><p>Beatae hic corporis rerum. Molestias nobis atque quis laudantium suscipit vel. Totam maiores enim consequatur numquam quo quo.</p><p>Voluptas iusto fugiat ipsam. Veniam magnam sit aut aut accusamus eveniet nesciunt. Consequatur doloribus alias praesentium sit impedit repellat cumque.</p><p>Repellat iure at rerum voluptatem. Voluptas eum a incidunt distinctio incidunt enim repellat et. Voluptatem harum architecto quos doloremque nostrum qui doloremque. Reprehenderit tempore quis excepturi doloremque architecto. Inventore et unde magni non eius ipsum.</p><p>Id non tenetur veritatis laboriosam quam. Quis consequuntur dicta quo dolorem.</p><p>Dolorem sed veniam et est placeat at qui. Architecto est doloremque qui quisquam corporis. Dolor at voluptatem quia voluptatum.</p><p>Voluptatem laborum quia illum similique saepe et placeat. Nostrum ipsam qui dolores. Earum sit voluptate in. Consequatur totam aperiam beatae accusantium aut.</p><p>Labore id assumenda iste veritatis adipisci porro qui accusamus. Sint sapiente laudantium impedit dignissimos est beatae. Tenetur et voluptas est expedita in. Magni rem libero mollitia distinctio est cumque.</p><p>Suscipit tenetur nihil quisquam non provident perspiciatis. Corrupti tenetur molestias perferendis sunt est quis aut dolor. Quia quia eveniet temporibus sed molestiae. Tenetur sint ipsa quis sed.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(15, 3, 1, 'Cum et assumenda saepe.', 'porro-et-enim-soluta-eos-ex-est', NULL, 'Numquam qui ex laborum dignissimos ut. At incidunt tempore ipsam tempore veniam dolor. Ea quas accusantium adipisci eum quia est. Quia consectetur et sit sint vitae.', '<p>Facilis et pariatur consequatur modi laudantium tempora porro. Ad sint ut et laborum in est. Doloremque perspiciatis in et ex eligendi ipsa. Et deleniti dolorem repudiandae quisquam ipsa est est.</p><p>Assumenda laudantium aut a ut provident magnam. Soluta quaerat incidunt tempora dicta labore accusamus itaque dignissimos. Eos sunt sed harum et. Ea magnam voluptatem porro dolore aut voluptatem sint consequatur.</p><p>Sit reprehenderit dolores eum repellendus eaque consequatur. Perferendis itaque dicta aliquid culpa veritatis in quo. Reprehenderit et ipsam nihil nostrum adipisci. Explicabo earum velit sit ut accusantium enim.</p><p>Accusamus amet nesciunt dolor molestiae non possimus asperiores iusto. Corrupti quibusdam iure a expedita soluta. Laborum repellat eos ex ipsa nihil soluta ullam magnam.</p><p>Fuga harum sit neque officia cupiditate iste. Fugit aut modi quisquam consequuntur quia sit. Est natus quia sequi error corrupti. Et magni facere earum.</p><p>Aliquam rerum similique voluptatem qui ipsam qui. Quae sed voluptate quia illo aut quia est. Laborum sunt ut dicta. Dicta perferendis et et mollitia.</p><p>Eum magni qui eos temporibus. Iure voluptatum cumque eligendi aperiam est voluptas. Et voluptatem id veritatis aut consequatur ut ut ipsum. Enim error itaque enim adipisci deleniti quis. Consequatur odit explicabo eos nihil voluptatem.</p><p>Omnis possimus perspiciatis iure ut neque. Praesentium hic cum natus sunt. Impedit aut ad alias aut est impedit unde. Quia quia ut ea aut unde quia officia a.</p><p>Doloremque quo cum consequatur ut itaque. Cupiditate dolorem velit aut quia nobis. Id et exercitationem mollitia nobis molestiae necessitatibus. Eos quam vero et enim numquam blanditiis fugiat. Est ut qui aspernatur.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(16, 1, 1, 'Explicabo beatae sit ullam non.', 'quod-quos-ipsa-quia-accusantium-fuga-quia-qui-velit', NULL, 'Sit laborum rem et culpa explicabo est qui. Ducimus voluptates ut amet. A minima animi accusantium minima tenetur dolor. Natus unde blanditiis quam ut...', '<div>Sit laborum rem et culpa explicabo est qui. Ducimus voluptates ut amet. A minima animi accusantium minima tenetur dolor. Natus unde blanditiis quam ut ex.<br><br></div><div>In id cum perspiciatis architecto placeat. Ut et quibusdam cupiditate laboriosam explicabo et. Et distinctio eos quia atque sint.<br><br></div><div>Doloribus nam voluptatem quo omnis labore distinctio vero. Consequatur et quaerat repudiandae sunt.<br><br></div><div>Veniam minima quaerat natus repudiandae labore iusto officiis. Dolorum placeat totam veritatis ad numquam.<br><br></div><div>Accusamus repudiandae nihil voluptatem doloribus. Earum vel ut vitae nisi suscipit rerum. Labore minus sint dicta corporis. Vitae quia est qui quisquam aliquid pariatur assumenda provident.<br><br></div><div>Quae aliquam consequuntur consequatur nesciunt. Corrupti minima voluptatem facere.<br><br></div><div>Eum quae in illum. Dolores hic autem itaque velit officiis doloremque eum. Cum exercitationem corporis sequi.<br><br></div>', NULL, '2023-01-01 06:25:53', '2023-01-01 08:41:08'),
(17, 1, 1, 'Qui eaque aliquid ut ea inventore.', 'quam-numquam-quidem-nemo-fugit-ut-unde-quis', NULL, 'In omnis quibusdam facere voluptas qui. Similique dolores culpa laudantium id. Aspernatur asperiores est qui laudantium.Et illum perferendis nobis vel...', '<div>In omnis quibusdam facere voluptas qui. Similique dolores culpa laudantium id. Aspernatur asperiores est qui laudantium.<br><br></div><div>Et illum perferendis nobis vel optio rerum veniam. Minima iusto molestiae adipisci delectus. Quis sint repellat dolores dignissimos et.<br><br></div><div>Voluptate deleniti aut ipsum. Quidem expedita aut ullam. Molestias odio dolor sapiente officia. Possimus est dignissimos quasi nihil laudantium.<br><br></div><div>Porro qui itaque pariatur eos. Ut exercitationem vel est et omnis illo. Velit tempora maiores unde sit ipsum. Animi nobis laboriosam voluptate quia.<br><br></div><div>Enim maiores earum numquam sed quia. Enim dolorem fugit blanditiis at. Ipsam ea et assumenda autem nesciunt porro.<br><br></div><div>Qui consequatur occaecati delectus accusamus at alias. Eligendi nisi eos exercitationem reiciendis voluptate. In maxime culpa optio est ipsa. Sint ducimus perferendis minima impedit omnis.<br><br></div><div>Necessitatibus nam qui dolorem et. Dolor et ducimus fuga quia. Voluptas recusandae maxime voluptatem et et velit temporibus quia.<br><br></div>', NULL, '2023-01-01 06:25:53', '2023-01-01 08:40:43'),
(18, 3, 1, 'Iusto ut.', 'nobis-rem-expedita-eum-qui-non-minus', NULL, 'Quibusdam et vel impedit quo dolor. Veniam consectetur qui dolor cum. Illum voluptatem sunt sit ducimus consequuntur. Fugit omnis accusantium in consequatur quo corporis dolor. Temporibus eveniet aut voluptatibus voluptatum veniam nam.', '<p>Quos ratione dolorem quod nisi saepe incidunt et. Porro quia est omnis voluptatem. Consequatur est animi corrupti. Aliquam aut quo suscipit totam qui amet.</p><p>Ullam neque asperiores aut sit corporis. Voluptatem ipsa ut qui omnis cum eaque iusto. Dolor suscipit dolorum beatae nam vero. Itaque necessitatibus voluptatem expedita omnis.</p><p>Corrupti necessitatibus aperiam officiis cum explicabo. Quibusdam a eius quod repellat. Placeat eos corrupti odio et.</p><p>Quo culpa inventore nulla non consequatur aut officiis voluptatem. Culpa id quaerat nesciunt sed nemo. Enim suscipit magnam nobis.</p><p>Sunt libero enim quo iure provident quia officia. Ut quidem alias quia quia vel odit. Veritatis ut vero facilis consequuntur maxime aut accusantium amet.</p><p>Ut repellendus aliquid voluptatem. Sunt velit in quia quo facilis repellendus magni qui. Blanditiis aspernatur nesciunt in non voluptate quibusdam.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(19, 3, 1, 'Atque dolorem quo itaque quisquam.', 'voluptas-aut-sint-quaerat-ab', NULL, 'Molestiae sint unde architecto. Sit est necessitatibus velit cupiditate enim harum vel. Sapiente odit est qui quia quis omnis explicabo.', '<p>Laudantium rerum velit velit quae reprehenderit exercitationem. Voluptatem perspiciatis non necessitatibus doloremque in aut. Officia laboriosam est sint quas. Autem nam distinctio odit aliquam. Dolor asperiores nesciunt ipsa laudantium et modi sunt.</p><p>Vero velit dolore quia voluptate. Ut aliquam eos sed molestiae porro dignissimos.</p><p>Et voluptatem commodi vero sit distinctio et ea. Quibusdam perferendis consequatur sunt totam. Nesciunt iure magni repellat iure illo ut exercitationem. Voluptatibus hic magnam qui natus.</p><p>Est soluta maxime tempora voluptatem. Harum eos sed est architecto earum rem. Tempore nam illo fugiat maxime esse.</p><p>Quis praesentium autem ducimus necessitatibus. Dolor ipsum molestiae delectus debitis aut fuga laboriosam. Tempora sed at explicabo et voluptate nesciunt. Quaerat quibusdam fugiat minus molestiae mollitia quia.</p>', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53'),
(20, 1, 1, 'Beatae laborum sequi.', 'molestias-consequatur-et-quasi-qui', NULL, 'Dolores doloribus corrupti maxime. Maiores doloribus est sit et. Est nobis beatae velit sit aut fugit voluptatibus. Deleniti veritatis ut excepturi re...', '<div>Dolores doloribus corrupti maxime. Maiores doloribus est sit et. Est nobis beatae velit sit aut fugit voluptatibus. Deleniti veritatis ut excepturi rerum maiores.<br><br></div><div>Quo voluptatem et omnis doloribus similique quia reiciendis. Et eligendi officiis officiis atque ut cupiditate quod. Perferendis veniam omnis qui quidem sit. Quaerat libero et corrupti non.<br><br></div><div>Nostrum consequatur expedita et. Blanditiis doloribus cumque voluptate illum. Ipsa accusantium est optio porro quam quas esse. Ad consequuntur consequuntur labore vitae molestiae. Rerum maxime reiciendis magnam quos quo ut quos.<br><br></div><div>Sed nobis totam accusantium eaque tempora laudantium ratione. Impedit repellat perspiciatis ullam optio. Tempore ut magni quisquam. Itaque doloribus dolorem tenetur aut beatae. Doloribus voluptas eos maxime sapiente.<br><br></div><div>Eveniet dolores animi et aut eos. Quod eligendi consequatur debitis nulla commodi non. Error mollitia sed et dolorem quia non omnis.<br><br></div><div>Ea facere quasi aliquam eaque iste. Molestiae corrupti laudantium fugit eius accusamus. Repudiandae dolor aut dolorum expedita odit eaque necessitatibus. Sint incidunt velit aliquam et quisquam consequatur omnis.<br><br></div><div>Qui et alias molestiae illum repellendus expedita corrupti hic. Dolores omnis excepturi minus porro omnis adipisci. Minus harum eum culpa officiis sed.<br><br></div><div>Deleniti vel cumque molestiae quia sapiente. Ut quia dolorem repudiandae quas et maiores magnam. Autem incidunt iusto occaecati libero aliquam voluptatibus.<br><br></div><div>Perferendis cumque accusantium enim. Nihil aut non qui reiciendis. Doloribus labore praesentium soluta corrupti. Id ut qui doloribus voluptatibus aut.<br><br></div>', NULL, '2023-01-01 06:25:53', '2023-01-01 08:40:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'adminlunah-amanah@gmail.com', NULL, '$2y$10$RtYhxEhdrfiP81xMvr3/veQp4b.Ac9QKNEQOY6vEk4aQVoel.gDzO', NULL, '2023-01-01 06:25:53', '2023-01-01 06:25:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
