<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231126164038 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE BbwxD_actionscheduler_actions CHANGE group_id group_id BIGINT UNSIGNED NOT NULL, CHANGE attempts attempts INT NOT NULL, CHANGE claim_id claim_id BIGINT UNSIGNED NOT NULL');
        $this->addSql('DROP INDEX slug ON BbwxD_actionscheduler_groups');
        $this->addSql('CREATE INDEX slug ON BbwxD_actionscheduler_groups (slug)');
        $this->addSql('ALTER TABLE BbwxD_users CHANGE user_login user_login VARCHAR(60) NOT NULL, CHANGE user_pass user_pass VARCHAR(255) NOT NULL, CHANGE user_nicename user_nicename VARCHAR(50) NOT NULL, CHANGE user_email user_email VARCHAR(100) NOT NULL, CHANGE user_url user_url VARCHAR(100) NOT NULL, CHANGE user_activation_key user_activation_key VARCHAR(255) NOT NULL, CHANGE user_status user_status INT NOT NULL, CHANGE display_name display_name VARCHAR(250) NOT NULL');
        $this->addSql('ALTER TABLE BbwxD_wc_admin_notes CHANGE is_snoozable is_snoozable TINYINT(1) NOT NULL, CHANGE layout layout VARCHAR(20) NOT NULL, CHANGE is_deleted is_deleted TINYINT(1) NOT NULL, CHANGE is_read is_read TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE BbwxD_wc_customer_lookup CHANGE username username VARCHAR(60) NOT NULL, CHANGE country country CHAR(2) NOT NULL, CHANGE postcode postcode VARCHAR(20) NOT NULL, CHANGE city city VARCHAR(100) NOT NULL, CHANGE state state VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE BbwxD_wc_download_log CHANGE user_ip_address user_ip_address VARCHAR(100) DEFAULT NULL');
        $this->addSql('DROP INDEX email ON BbwxD_wc_order_addresses');
        $this->addSql('CREATE INDEX email ON BbwxD_wc_order_addresses (email)');
        $this->addSql('ALTER TABLE BbwxD_wc_order_coupon_lookup CHANGE discount_amount discount_amount DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE BbwxD_wc_order_product_lookup CHANGE order_item_id order_item_id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE product_net_revenue product_net_revenue DOUBLE PRECISION NOT NULL, CHANGE product_gross_revenue product_gross_revenue DOUBLE PRECISION NOT NULL, CHANGE coupon_amount coupon_amount DOUBLE PRECISION NOT NULL, CHANGE tax_amount tax_amount DOUBLE PRECISION NOT NULL, CHANGE shipping_amount shipping_amount DOUBLE PRECISION NOT NULL, CHANGE shipping_tax_amount shipping_tax_amount DOUBLE PRECISION NOT NULL');
        $this->addSql('DROP INDEX status ON BbwxD_wc_order_stats');
        $this->addSql('ALTER TABLE BbwxD_wc_order_stats CHANGE order_id order_id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE parent_id parent_id BIGINT UNSIGNED NOT NULL, CHANGE num_items_sold num_items_sold INT NOT NULL, CHANGE total_sales total_sales DOUBLE PRECISION NOT NULL, CHANGE tax_total tax_total DOUBLE PRECISION NOT NULL, CHANGE shipping_total shipping_total DOUBLE PRECISION NOT NULL, CHANGE net_total net_total DOUBLE PRECISION NOT NULL');
        $this->addSql('CREATE INDEX status ON BbwxD_wc_order_stats (status)');
        $this->addSql('ALTER TABLE BbwxD_wc_order_tax_lookup CHANGE shipping_tax shipping_tax DOUBLE PRECISION NOT NULL, CHANGE order_tax order_tax DOUBLE PRECISION NOT NULL, CHANGE total_tax total_tax DOUBLE PRECISION NOT NULL');
        $this->addSql('DROP INDEX customer_id_billing_email ON BbwxD_wc_orders');
        $this->addSql('DROP INDEX billing_email ON BbwxD_wc_orders');
        $this->addSql('ALTER TABLE BbwxD_wc_orders CHANGE id id BIGINT UNSIGNED AUTO_INCREMENT NOT NULL');
        $this->addSql('CREATE INDEX customer_id_billing_email ON BbwxD_wc_orders (customer_id, billing_email)');
        $this->addSql('CREATE INDEX billing_email ON BbwxD_wc_orders (billing_email)');
        $this->addSql('DROP INDEX order_id_meta_key_meta_value ON BbwxD_wc_orders_meta');
        $this->addSql('DROP INDEX meta_key_value ON BbwxD_wc_orders_meta');
        $this->addSql('CREATE INDEX order_id_meta_key_meta_value ON BbwxD_wc_orders_meta (order_id, meta_key, meta_value)');
        $this->addSql('CREATE INDEX meta_key_value ON BbwxD_wc_orders_meta (meta_key, meta_value)');
        $this->addSql('DROP INDEX `primary` ON BbwxD_wc_product_attributes_lookup');
        $this->addSql('ALTER TABLE BbwxD_wc_product_attributes_lookup ADD PRIMARY KEY (product_id, product_or_parent_id, taxonomy, term_id)');
        $this->addSql('DROP INDEX url ON BbwxD_wc_product_download_directories');
        $this->addSql('ALTER TABLE BbwxD_wc_product_download_directories CHANGE enabled enabled TINYINT(1) NOT NULL');
        $this->addSql('CREATE INDEX url ON BbwxD_wc_product_download_directories (url)');
        $this->addSql('ALTER TABLE BbwxD_wc_product_meta_lookup CHANGE product_id product_id BIGINT AUTO_INCREMENT NOT NULL, CHANGE sku sku VARCHAR(100) DEFAULT NULL, CHANGE `virtual` `virtual` TINYINT(1) DEFAULT NULL, CHANGE downloadable downloadable TINYINT(1) DEFAULT NULL, CHANGE onsale onsale TINYINT(1) DEFAULT NULL, CHANGE rating_count rating_count BIGINT DEFAULT NULL, CHANGE total_sales total_sales BIGINT DEFAULT NULL, CHANGE tax_class tax_class VARCHAR(100) DEFAULT NULL');
        $this->addSql('DROP INDEX rate_limit_key ON BbwxD_wc_rate_limits');
        $this->addSql('ALTER TABLE BbwxD_wc_rate_limits CHANGE rate_limit_remaining rate_limit_remaining SMALLINT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX rate_limit_key ON BbwxD_wc_rate_limits (rate_limit_key)');
        $this->addSql('ALTER TABLE BbwxD_wc_reserved_stock CHANGE stock_quantity stock_quantity DOUBLE PRECISION NOT NULL');
        $this->addSql('DROP INDEX slug ON BbwxD_wc_tax_rate_classes');
        $this->addSql('ALTER TABLE BbwxD_wc_tax_rate_classes CHANGE name name VARCHAR(200) NOT NULL, CHANGE slug slug VARCHAR(200) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX slug ON BbwxD_wc_tax_rate_classes (slug)');
        $this->addSql('ALTER TABLE BbwxD_wc_webhooks CHANGE failure_count failure_count SMALLINT NOT NULL, CHANGE pending_delivery pending_delivery TINYINT(1) NOT NULL');
        $this->addSql('DROP INDEX attribute_name ON BbwxD_woocommerce_attribute_taxonomies');
        $this->addSql('CREATE INDEX attribute_name ON BbwxD_woocommerce_attribute_taxonomies (attribute_name)');
        $this->addSql('DROP INDEX download_order_key_product ON BbwxD_woocommerce_downloadable_product_permissions');
        $this->addSql('ALTER TABLE BbwxD_woocommerce_downloadable_product_permissions CHANGE order_id order_id BIGINT UNSIGNED NOT NULL, CHANGE download_count download_count BIGINT UNSIGNED NOT NULL');
        $this->addSql('CREATE INDEX download_order_key_product ON BbwxD_woocommerce_downloadable_product_permissions (product_id, order_id, order_key, download_id)');
        $this->addSql('DROP INDEX meta_key ON BbwxD_woocommerce_order_itemmeta');
        $this->addSql('CREATE INDEX meta_key ON BbwxD_woocommerce_order_itemmeta (meta_key)');
        $this->addSql('ALTER TABLE BbwxD_woocommerce_order_items CHANGE order_item_type order_item_type VARCHAR(200) NOT NULL');
        $this->addSql('DROP INDEX meta_key ON BbwxD_woocommerce_payment_tokenmeta');
        $this->addSql('CREATE INDEX meta_key ON BbwxD_woocommerce_payment_tokenmeta (meta_key)');
        $this->addSql('ALTER TABLE BbwxD_woocommerce_payment_tokens CHANGE user_id user_id BIGINT UNSIGNED NOT NULL, CHANGE is_default is_default TINYINT(1) NOT NULL');
        $this->addSql('DROP INDEX location_type_code ON BbwxD_woocommerce_shipping_zone_locations');
        $this->addSql('CREATE INDEX location_type_code ON BbwxD_woocommerce_shipping_zone_locations (location_type, location_code)');
        $this->addSql('DROP INDEX location_type_code ON BbwxD_woocommerce_tax_rate_locations');
        $this->addSql('CREATE INDEX location_type_code ON BbwxD_woocommerce_tax_rate_locations (location_type, location_code)');
        $this->addSql('DROP INDEX tax_rate_class ON BbwxD_woocommerce_tax_rates');
        $this->addSql('DROP INDEX tax_rate_state ON BbwxD_woocommerce_tax_rates');
        $this->addSql('ALTER TABLE BbwxD_woocommerce_tax_rates CHANGE tax_rate_country tax_rate_country VARCHAR(2) NOT NULL, CHANGE tax_rate_state tax_rate_state VARCHAR(200) NOT NULL, CHANGE tax_rate tax_rate VARCHAR(8) NOT NULL, CHANGE tax_rate_name tax_rate_name VARCHAR(200) NOT NULL, CHANGE tax_rate_compound tax_rate_compound INT NOT NULL, CHANGE tax_rate_class tax_rate_class VARCHAR(200) NOT NULL');
        $this->addSql('CREATE INDEX tax_rate_class ON BbwxD_woocommerce_tax_rates (tax_rate_class)');
        $this->addSql('CREATE INDEX tax_rate_state ON BbwxD_woocommerce_tax_rates (tax_rate_state)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE BbwxD_actionscheduler_actions CHANGE group_id group_id BIGINT UNSIGNED DEFAULT 0 NOT NULL, CHANGE attempts attempts INT DEFAULT 0 NOT NULL, CHANGE claim_id claim_id BIGINT UNSIGNED DEFAULT 0 NOT NULL');
        $this->addSql('DROP INDEX slug ON BbwxD_actionscheduler_groups');
        $this->addSql('CREATE INDEX slug ON BbwxD_actionscheduler_groups (slug(191))');
        $this->addSql('ALTER TABLE BbwxD_users CHANGE user_login user_login VARCHAR(60) DEFAULT \'\' NOT NULL, CHANGE user_pass user_pass VARCHAR(255) DEFAULT \'\' NOT NULL, CHANGE user_nicename user_nicename VARCHAR(50) DEFAULT \'\' NOT NULL, CHANGE user_email user_email VARCHAR(100) DEFAULT \'\' NOT NULL, CHANGE user_url user_url VARCHAR(100) DEFAULT \'\' NOT NULL, CHANGE user_activation_key user_activation_key VARCHAR(255) DEFAULT \'\' NOT NULL, CHANGE user_status user_status INT DEFAULT 0 NOT NULL, CHANGE display_name display_name VARCHAR(250) DEFAULT \'\' NOT NULL');
        $this->addSql('ALTER TABLE BbwxD_wc_admin_notes CHANGE is_snoozable is_snoozable TINYINT(1) DEFAULT 0 NOT NULL, CHANGE layout layout VARCHAR(20) DEFAULT \'\' NOT NULL, CHANGE is_deleted is_deleted TINYINT(1) DEFAULT 0 NOT NULL, CHANGE is_read is_read TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE BbwxD_wc_customer_lookup CHANGE username username VARCHAR(60) DEFAULT \'\' NOT NULL, CHANGE country country CHAR(2) DEFAULT \'\' NOT NULL, CHANGE postcode postcode VARCHAR(20) DEFAULT \'\' NOT NULL, CHANGE city city VARCHAR(100) DEFAULT \'\' NOT NULL, CHANGE state state VARCHAR(100) DEFAULT \'\' NOT NULL');
        $this->addSql('ALTER TABLE BbwxD_wc_download_log CHANGE user_ip_address user_ip_address VARCHAR(100) DEFAULT \'\'');
        $this->addSql('DROP INDEX email ON BbwxD_wc_order_addresses');
        $this->addSql('CREATE INDEX email ON BbwxD_wc_order_addresses (email(191))');
        $this->addSql('ALTER TABLE BbwxD_wc_order_coupon_lookup CHANGE discount_amount discount_amount DOUBLE PRECISION DEFAULT \'0\' NOT NULL');
        $this->addSql('ALTER TABLE BbwxD_wc_order_product_lookup CHANGE order_item_id order_item_id BIGINT UNSIGNED NOT NULL, CHANGE product_net_revenue product_net_revenue DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE product_gross_revenue product_gross_revenue DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE coupon_amount coupon_amount DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE tax_amount tax_amount DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE shipping_amount shipping_amount DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE shipping_tax_amount shipping_tax_amount DOUBLE PRECISION DEFAULT \'0\' NOT NULL');
        $this->addSql('DROP INDEX status ON BbwxD_wc_order_stats');
        $this->addSql('ALTER TABLE BbwxD_wc_order_stats CHANGE order_id order_id BIGINT UNSIGNED NOT NULL, CHANGE parent_id parent_id BIGINT UNSIGNED DEFAULT 0 NOT NULL, CHANGE num_items_sold num_items_sold INT DEFAULT 0 NOT NULL, CHANGE total_sales total_sales DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE tax_total tax_total DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE shipping_total shipping_total DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE net_total net_total DOUBLE PRECISION DEFAULT \'0\' NOT NULL');
        $this->addSql('CREATE INDEX status ON BbwxD_wc_order_stats (status(191))');
        $this->addSql('ALTER TABLE BbwxD_wc_order_tax_lookup CHANGE shipping_tax shipping_tax DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE order_tax order_tax DOUBLE PRECISION DEFAULT \'0\' NOT NULL, CHANGE total_tax total_tax DOUBLE PRECISION DEFAULT \'0\' NOT NULL');
        $this->addSql('DROP INDEX customer_id_billing_email ON BbwxD_wc_orders');
        $this->addSql('DROP INDEX billing_email ON BbwxD_wc_orders');
        $this->addSql('ALTER TABLE BbwxD_wc_orders CHANGE id id BIGINT UNSIGNED NOT NULL');
        $this->addSql('CREATE INDEX customer_id_billing_email ON BbwxD_wc_orders (customer_id, billing_email(171))');
        $this->addSql('CREATE INDEX billing_email ON BbwxD_wc_orders (billing_email(191))');
        $this->addSql('DROP INDEX order_id_meta_key_meta_value ON BbwxD_wc_orders_meta');
        $this->addSql('DROP INDEX meta_key_value ON BbwxD_wc_orders_meta');
        $this->addSql('CREATE INDEX order_id_meta_key_meta_value ON BbwxD_wc_orders_meta (order_id, meta_key(100), meta_value(82))');
        $this->addSql('CREATE INDEX meta_key_value ON BbwxD_wc_orders_meta (meta_key(100), meta_value(82))');
        $this->addSql('DROP INDEX `PRIMARY` ON BbwxD_wc_product_attributes_lookup');
        $this->addSql('ALTER TABLE BbwxD_wc_product_attributes_lookup ADD PRIMARY KEY (product_or_parent_id, term_id, product_id, taxonomy)');
        $this->addSql('DROP INDEX url ON BbwxD_wc_product_download_directories');
        $this->addSql('ALTER TABLE BbwxD_wc_product_download_directories CHANGE enabled enabled TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('CREATE INDEX url ON BbwxD_wc_product_download_directories (url(191))');
        $this->addSql('ALTER TABLE BbwxD_wc_product_meta_lookup CHANGE product_id product_id BIGINT NOT NULL, CHANGE sku sku VARCHAR(100) DEFAULT \'\', CHANGE `virtual` `virtual` TINYINT(1) DEFAULT 0, CHANGE downloadable downloadable TINYINT(1) DEFAULT 0, CHANGE onsale onsale TINYINT(1) DEFAULT 0, CHANGE rating_count rating_count BIGINT DEFAULT 0, CHANGE total_sales total_sales BIGINT DEFAULT 0, CHANGE tax_class tax_class VARCHAR(100) DEFAULT \'\'');
        $this->addSql('DROP INDEX rate_limit_key ON BbwxD_wc_rate_limits');
        $this->addSql('ALTER TABLE BbwxD_wc_rate_limits CHANGE rate_limit_remaining rate_limit_remaining SMALLINT DEFAULT 0 NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX rate_limit_key ON BbwxD_wc_rate_limits (rate_limit_key(191))');
        $this->addSql('ALTER TABLE BbwxD_wc_reserved_stock CHANGE stock_quantity stock_quantity DOUBLE PRECISION DEFAULT \'0\' NOT NULL');
        $this->addSql('DROP INDEX slug ON BbwxD_wc_tax_rate_classes');
        $this->addSql('ALTER TABLE BbwxD_wc_tax_rate_classes CHANGE name name VARCHAR(200) DEFAULT \'\' NOT NULL, CHANGE slug slug VARCHAR(200) DEFAULT \'\' NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX slug ON BbwxD_wc_tax_rate_classes (slug(191))');
        $this->addSql('ALTER TABLE BbwxD_wc_webhooks CHANGE failure_count failure_count SMALLINT DEFAULT 0 NOT NULL, CHANGE pending_delivery pending_delivery TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('DROP INDEX attribute_name ON BbwxD_woocommerce_attribute_taxonomies');
        $this->addSql('CREATE INDEX attribute_name ON BbwxD_woocommerce_attribute_taxonomies (attribute_name(20))');
        $this->addSql('DROP INDEX download_order_key_product ON BbwxD_woocommerce_downloadable_product_permissions');
        $this->addSql('ALTER TABLE BbwxD_woocommerce_downloadable_product_permissions CHANGE order_id order_id BIGINT UNSIGNED DEFAULT 0 NOT NULL, CHANGE download_count download_count BIGINT UNSIGNED DEFAULT 0 NOT NULL');
        $this->addSql('CREATE INDEX download_order_key_product ON BbwxD_woocommerce_downloadable_product_permissions (product_id, order_id, order_key(16), download_id)');
        $this->addSql('DROP INDEX meta_key ON BbwxD_woocommerce_order_itemmeta');
        $this->addSql('CREATE INDEX meta_key ON BbwxD_woocommerce_order_itemmeta (meta_key(32))');
        $this->addSql('ALTER TABLE BbwxD_woocommerce_order_items CHANGE order_item_type order_item_type VARCHAR(200) DEFAULT \'\' NOT NULL');
        $this->addSql('DROP INDEX meta_key ON BbwxD_woocommerce_payment_tokenmeta');
        $this->addSql('CREATE INDEX meta_key ON BbwxD_woocommerce_payment_tokenmeta (meta_key(32))');
        $this->addSql('ALTER TABLE BbwxD_woocommerce_payment_tokens CHANGE user_id user_id BIGINT UNSIGNED DEFAULT 0 NOT NULL, CHANGE is_default is_default TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('DROP INDEX location_type_code ON BbwxD_woocommerce_shipping_zone_locations');
        $this->addSql('CREATE INDEX location_type_code ON BbwxD_woocommerce_shipping_zone_locations (location_type(10), location_code(20))');
        $this->addSql('DROP INDEX location_type_code ON BbwxD_woocommerce_tax_rate_locations');
        $this->addSql('CREATE INDEX location_type_code ON BbwxD_woocommerce_tax_rate_locations (location_type(10), location_code(20))');
        $this->addSql('DROP INDEX tax_rate_class ON BbwxD_woocommerce_tax_rates');
        $this->addSql('DROP INDEX tax_rate_state ON BbwxD_woocommerce_tax_rates');
        $this->addSql('ALTER TABLE BbwxD_woocommerce_tax_rates CHANGE tax_rate_country tax_rate_country VARCHAR(2) DEFAULT \'\' NOT NULL, CHANGE tax_rate_state tax_rate_state VARCHAR(200) DEFAULT \'\' NOT NULL, CHANGE tax_rate tax_rate VARCHAR(8) DEFAULT \'\' NOT NULL, CHANGE tax_rate_name tax_rate_name VARCHAR(200) DEFAULT \'\' NOT NULL, CHANGE tax_rate_compound tax_rate_compound INT DEFAULT 0 NOT NULL, CHANGE tax_rate_class tax_rate_class VARCHAR(200) DEFAULT \'\' NOT NULL');
        $this->addSql('CREATE INDEX tax_rate_class ON BbwxD_woocommerce_tax_rates (tax_rate_class(10))');
        $this->addSql('CREATE INDEX tax_rate_state ON BbwxD_woocommerce_tax_rates (tax_rate_state(2))');
    }
}
