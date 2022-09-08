<?php
/**
 * ProductsSeeder.php
 *
 * @copyright  2022 opencart.cn - All Rights Reserved
 * @link       http://www.guangdawangluo.com
 * @author     Edward Yang <yangjin@opencart.cn>
 * @created    2022-09-05 19:42:42
 * @modified   2022-09-05 19:42:42
 */

namespace Database\Seeders;

use Beike\Models\Product;
use Beike\Models\ProductSku;
use Illuminate\Database\Seeder;
use Beike\Models\ProductCategory;
use Beike\Models\ProductDescription;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = $this->getProducts();
        if ($products) {
            Product::query()->truncate();
            foreach ($products as $item) {
                $item['images'] = json_decode($item['images'] ?? '');
                $item['variables'] = json_decode($item['variables'] ?? '');
                Product::query()->create($item);
            }
        }

        $categories = $this->getProductCategories();
        if ($categories) {
            ProductCategory::query()->truncate();
            foreach ($categories as $item) {
                ProductCategory::query()->create($item);
            }
        }

        $descriptions = $this->getProductDescriptions();
        if ($descriptions) {
            ProductDescription::query()->truncate();
            foreach ($descriptions as $item) {
                ProductDescription::query()->create($item);
            }
        }

        $skus = $this->getProductSkus();
        if ($skus) {
            ProductSku::query()->truncate();
            foreach ($skus as $item) {
                $item['images'] = json_decode($item['images']);
                $item['variants'] = json_decode($item['variants']);
                ProductSku::query()->create($item);
            }
        }
    }


    public function getProducts()
    {
        return [
            [
                "id" => 1,
                "brand_id" => 10,
                "video" => "",
                "images" => "[\"catalog/demo/product/1.jpg\", \"catalog/demo/product/2.jpg\", \"catalog/demo/product/4.jpg\"]",
                "position" => 0,
                "active" => 1,
                "variables" => "[{\"name\": {\"en\": \"chima\", \"zh_cn\": \"尺码\"}, \"values\": [{\"name\": {\"en\": \"L\", \"zh_cn\": \"L\"}, \"image\": \"\"}, {\"name\": {\"en\": \"M\", \"zh_cn\": \"M\"}, \"image\": \"\"}], \"isImage\": false}, {\"name\": {\"en\": \"yanse\", \"zh_cn\": \"颜色\"}, \"values\": [{\"name\": {\"en\": \"黄色\", \"zh_cn\": \"黄色\"}, \"image\": \"catalog/app/icon/3.png\"}, {\"name\": {\"en\": \"绿色\", \"zh_cn\": \"绿色\"}, \"image\": \"catalog/app/icon/8.png\"}], \"isImage\": false}]",
                "tax_class_id" => 1,
            ],
            [
                "id" => 2,
                "brand_id" => 11,
                "video" => "",
                "images" => "[\"catalog/demo/product/13.jpg\", \"catalog/demo/product/10.jpg\", \"catalog/demo/product/11.jpg\", \"catalog/demo/product/12.jpg\"]",
                "position" => 1,
                "active" => 1,
                "variables" => "[]",
                "tax_class_id" => 3,
            ],
            [
                "id" => 3,
                "brand_id" => 4,
                "video" => "",
                "images" => "[\"catalog/demo/product/17.jpg\", \"catalog/demo/product/11.jpg\", \"catalog/demo/product/12.jpg\", \"catalog/demo/product/13.jpg\"]",
                "position" => 1,
                "active" => 1,
                "variables" => "[]",
                "tax_class_id" => 1,
            ],
            [
                "id" => 4,
                "brand_id" => 7,
                "video" => "",
                "images" => "[\"catalog/demo/product/3.jpg\", \"catalog/demo/product/16.jpg\", \"catalog/demo/product/15.jpg\", \"catalog/demo/product/12.jpg\", \"catalog/demo/product/13.jpg\"]",
                "position" => 1,
                "active" => 1,
                "variables" => "[]",
                "tax_class_id" => 1,
            ],
            [
                "id" => 5,
                "brand_id" => 3,
                "video" => "",
                "images" => "[\"catalog/demo/product/4.jpg\", \"catalog/demo/product/15.jpg\", \"catalog/demo/product/16.jpg\", \"catalog/demo/product/17.jpg\"]",
                "position" => 1,
                "active" => 1,
                "variables" => "[]",
                "tax_class_id" => 1,
            ],
            [
                "id" => 6,
                "brand_id" => 2,
                "video" => "",
                "images" => "[\"catalog/demo/product/7.jpg\", \"catalog/demo/product/11.jpg\", \"catalog/demo/product/12.jpg\", \"catalog/demo/product/13.jpg\"]",
                "position" => 1,
                "active" => 0,
                "variables" => "[]",
                "tax_class_id" => 1,
            ],
            [
                "id" => 7,
                "brand_id" => 8,
                "video" => "",
                "images" => "[\"catalog/demo/product/5.jpg\", \"catalog/demo/product/16.jpg\", \"catalog/demo/product/3.jpg\", \"catalog/demo/product/9.jpg\"]",
                "position" => 1,
                "active" => 1,
                "variables" => "[]",
                "tax_class_id" => 1,
            ],
            [
                "id" => 8,
                "brand_id" => 5,
                "video" => "",
                "images" => "[\"catalog/demo/product/12.jpg\", \"catalog/demo/product/10.jpg\", \"catalog/demo/product/11.jpg\", \"catalog/demo/product/13.jpg\"]",
                "position" => 1,
                "active" => 1,
                "variables" => "[]",
                "tax_class_id" => 1,
            ],
            [
                "id" => 9,
                "brand_id" => 2,
                "video" => "",
                "images" => "[\"catalog/demo/product/14.jpg\", \"catalog/demo/product/10.jpg\", \"catalog/demo/product/11.jpg\", \"catalog/demo/product/12.jpg\", \"catalog/demo/product/13.jpg\"]",
                "position" => 1,
                "active" => 1,
                "variables" => "[]",
                "tax_class_id" => 1,
            ],
            [
                "id" => 10,
                "brand_id" => 1,
                "video" => "",
                "images" => "[\"catalog/demo/product/9.jpg\", \"catalog/demo/product/10.jpg\", \"catalog/demo/product/11.jpg\", \"catalog/demo/product/12.jpg\", \"catalog/demo/product/13.jpg\"]",
                "position" => 1,
                "active" => 1,
                "variables" => "[]",
                "tax_class_id" => 1,
            ],
            [
                "id" => 11,
                "brand_id" => 2,
                "video" => "",
                "images" => "[\"catalog/demo/product/10.jpg\", \"catalog/demo/product/11.jpg\", \"catalog/demo/product/12.jpg\", \"catalog/demo/product/13.jpg\"]",
                "position" => 1,
                "active" => 1,
                "variables" => "[]",
                "tax_class_id" => 1,
            ],
            [
                "id" => 12,
                "brand_id" => 2,
                "video" => "",
                "images" => "[\"catalog/demo/product/16.jpg\", \"catalog/demo/product/10.jpg\", \"catalog/demo/product/11.jpg\", \"catalog/demo/product/12.jpg\", \"catalog/demo/product/13.jpg\"]",
                "position" => 1,
                "active" => 1,
                "variables" => "[]",
                "tax_class_id" => 1,
            ],
            [
                "id" => 13,
                "brand_id" => 8,
                "video" => "",
                "images" => "[\"catalog/demo/product/2.jpg\", \"catalog/demo/product/3.jpg\", \"catalog/demo/product/4.jpg\", \"catalog/demo/product/5.jpg\", \"catalog/demo/product/6.jpg\"]",
                "position" => 1,
                "active" => 1,
                "variables" => "[]",
                "tax_class_id" => 1,
            ],
            [
                "id" => 14,
                "brand_id" => 9,
                "video" => "",
                "images" => "[\"catalog/demo/product/6.jpg\", \"catalog/demo/product/10.jpg\", \"catalog/demo/product/11.jpg\", \"catalog/demo/product/12.jpg\", \"catalog/demo/product/13.jpg\"]",
                "position" => 1,
                "active" => 1,
                "variables" => "[]",
                "tax_class_id" => 1,
            ],
            [
                "id" => 15,
                "brand_id" => 6,
                "video" => "",
                "images" => "[\"catalog/demo/product/15.jpg\", \"catalog/demo/product/10.jpg\", \"catalog/demo/product/11.jpg\", \"catalog/demo/product/12.jpg\", \"catalog/demo/product/13.jpg\"]",
                "position" => 1,
                "active" => 1,
                "variables" => "[]",
                "tax_class_id" => 1,
            ],
            [
                "id" => 35,
                "brand_id" => 1,
                "video" => "",
                "images" => "[\"catalog/demo/product/18.jpg\", \"catalog/demo/product/2.jpg\", \"catalog/demo/product/3.jpg\", \"catalog/demo/product/4.jpg\", \"catalog/demo/product/5.jpg\", \"catalog/demo/product/6.jpg\", \"catalog/demo/product/7.jpg\", \"catalog/demo/product/9.jpg\", \"catalog/demo/product/xq_01.jpg\"]",
                "position" => 1,
                "active" => 1,
                "variables" => "[]",
                "tax_class_id" => 2,
            ],
            [
                "id" => 39,
                "brand_id" => 4,
                "video" => "",
                "images" => "[\"catalog/demo/product/11.jpg\", \"catalog/demo/product/12.jpg\", \"catalog/demo/product/13.jpg\", \"catalog/demo/product/14.jpg\", \"catalog/demo/product/15.jpg\", \"catalog/demo/product/16.jpg\", \"catalog/demo/product/17.jpg\", \"catalog/demo/product/18.jpg\", \"catalog/demo/product/2.jpg\"]",
                "position" => 1,
                "active" => 1,
                "variables" => "[{\"name\": {\"en\": \"color\", \"zh_cn\": \"颜色\"}, \"values\": [{\"name\": {\"en\": \"yellow\", \"zh_cn\": \"黄色\"}, \"image\": \"\"}, {\"name\": {\"en\": \"green\", \"zh_cn\": \"绿色\"}, \"image\": \"\"}], \"isImage\": true}, {\"name\": {\"en\": \"规格\", \"zh_cn\": \"规格\"}, \"values\": [{\"name\": {\"en\": \"450ML\", \"zh_cn\": \"450ML\"}, \"image\": \"\"}, {\"name\": {\"en\": \"500ml\", \"zh_cn\": \"500ml\"}, \"image\": \"\"}], \"isImage\": false}]",
                "tax_class_id" => 1,
            ]
        ];
    }

    public function getProductCategories()
    {
        return [
            [
                "id" => 1,
                "product_id" => 2,
                "category_id" => 100000,
            ],
            [
                "id" => 3,
                "product_id" => 2,
                "category_id" => 100002,
            ],
            [
                "id" => 4,
                "product_id" => 2,
                "category_id" => 100003,
            ],
            [
                "id" => 5,
                "product_id" => 2,
                "category_id" => 100004,
            ],
            [
                "id" => 6,
                "product_id" => 2,
                "category_id" => 100005,
            ],
            [
                "id" => 7,
                "product_id" => 2,
                "category_id" => 100008,
            ],
            [
                "id" => 8,
                "product_id" => 2,
                "category_id" => 100007,
            ],
            [
                "id" => 9,
                "product_id" => 2,
                "category_id" => 100009,
            ],
            [
                "id" => 10,
                "product_id" => 14,
                "category_id" => 100000,
            ],
            [
                "id" => 12,
                "product_id" => 14,
                "category_id" => 100002,
            ],
            [
                "id" => 13,
                "product_id" => 14,
                "category_id" => 100003,
            ],
            [
                "id" => 14,
                "product_id" => 14,
                "category_id" => 100004,
            ],
            [
                "id" => 15,
                "product_id" => 14,
                "category_id" => 100005,
            ],
            [
                "id" => 16,
                "product_id" => 14,
                "category_id" => 100008,
                "created_at" => "2022-08-11 09:09:47",
                "updated_at" => "2022-08-11 09:09:47"
            ],
            [
                "id" => 17,
                "product_id" => 14,
                "category_id" => 100007,
                "created_at" => "2022-08-11 09:09:47",
                "updated_at" => "2022-08-11 09:09:47"
            ],
            [
                "id" => 18,
                "product_id" => 14,
                "category_id" => 100009,
                "created_at" => "2022-08-11 09:09:47",
                "updated_at" => "2022-08-11 09:09:47"
            ],
            [
                "id" => 19,
                "product_id" => 15,
                "category_id" => 100000,
                "created_at" => "2022-08-11 09:10:29",
                "updated_at" => "2022-08-11 09:10:29"
            ],
            [
                "id" => 21,
                "product_id" => 15,
                "category_id" => 100002,
                "created_at" => "2022-08-11 09:10:29",
                "updated_at" => "2022-08-11 09:10:29"
            ],
            [
                "id" => 22,
                "product_id" => 15,
                "category_id" => 100003,
                "created_at" => "2022-08-11 09:10:29",
                "updated_at" => "2022-08-11 09:10:29"
            ],
            [
                "id" => 23,
                "product_id" => 15,
                "category_id" => 100004,
                "created_at" => "2022-08-11 09:10:29",
                "updated_at" => "2022-08-11 09:10:29"
            ],
            [
                "id" => 24,
                "product_id" => 15,
                "category_id" => 100005,
                "created_at" => "2022-08-11 09:10:29",
                "updated_at" => "2022-08-11 09:10:29"
            ],
            [
                "id" => 25,
                "product_id" => 15,
                "category_id" => 100008,
                "created_at" => "2022-08-11 09:10:29",
                "updated_at" => "2022-08-11 09:10:29"
            ],
            [
                "id" => 26,
                "product_id" => 15,
                "category_id" => 100007,
                "created_at" => "2022-08-11 09:10:29",
                "updated_at" => "2022-08-11 09:10:29"
            ],
            [
                "id" => 27,
                "product_id" => 15,
                "category_id" => 100009,
                "created_at" => "2022-08-11 09:10:29",
                "updated_at" => "2022-08-11 09:10:29"
            ],
            [
                "id" => 28,
                "product_id" => 16,
                "category_id" => 100000,
                "created_at" => "2022-08-11 09:10:30",
                "updated_at" => "2022-08-11 09:10:30"
            ],
            [
                "id" => 30,
                "product_id" => 16,
                "category_id" => 100002,
                "created_at" => "2022-08-11 09:10:30",
                "updated_at" => "2022-08-11 09:10:30"
            ],
            [
                "id" => 31,
                "product_id" => 16,
                "category_id" => 100003,
                "created_at" => "2022-08-11 09:10:30",
                "updated_at" => "2022-08-11 09:10:30"
            ],
            [
                "id" => 32,
                "product_id" => 16,
                "category_id" => 100004,
                "created_at" => "2022-08-11 09:10:30",
                "updated_at" => "2022-08-11 09:10:30"
            ],
            [
                "id" => 33,
                "product_id" => 16,
                "category_id" => 100005,
                "created_at" => "2022-08-11 09:10:30",
                "updated_at" => "2022-08-11 09:10:30"
            ],
            [
                "id" => 34,
                "product_id" => 16,
                "category_id" => 100008,
                "created_at" => "2022-08-11 09:10:30",
                "updated_at" => "2022-08-11 09:10:30"
            ],
            [
                "id" => 35,
                "product_id" => 16,
                "category_id" => 100007,
                "created_at" => "2022-08-11 09:10:30",
                "updated_at" => "2022-08-11 09:10:30"
            ],
            [
                "id" => 36,
                "product_id" => 16,
                "category_id" => 100009,
                "created_at" => "2022-08-11 09:10:30",
                "updated_at" => "2022-08-11 09:10:30"
            ],
            [
                "id" => 37,
                "product_id" => 17,
                "category_id" => 100000,
                "created_at" => "2022-08-11 09:10:31",
                "updated_at" => "2022-08-11 09:10:31"
            ],
            [
                "id" => 39,
                "product_id" => 17,
                "category_id" => 100002,
                "created_at" => "2022-08-11 09:10:31",
                "updated_at" => "2022-08-11 09:10:31"
            ],
            [
                "id" => 40,
                "product_id" => 17,
                "category_id" => 100003,
                "created_at" => "2022-08-11 09:10:31",
                "updated_at" => "2022-08-11 09:10:31"
            ],
            [
                "id" => 41,
                "product_id" => 17,
                "category_id" => 100004,
                "created_at" => "2022-08-11 09:10:31",
                "updated_at" => "2022-08-11 09:10:31"
            ],
            [
                "id" => 42,
                "product_id" => 17,
                "category_id" => 100005,
                "created_at" => "2022-08-11 09:10:31",
                "updated_at" => "2022-08-11 09:10:31"
            ],
            [
                "id" => 43,
                "product_id" => 17,
                "category_id" => 100008,
                "created_at" => "2022-08-11 09:10:31",
                "updated_at" => "2022-08-11 09:10:31"
            ],
            [
                "id" => 44,
                "product_id" => 17,
                "category_id" => 100007,
                "created_at" => "2022-08-11 09:10:31",
                "updated_at" => "2022-08-11 09:10:31"
            ],
            [
                "id" => 45,
                "product_id" => 17,
                "category_id" => 100009,
                "created_at" => "2022-08-11 09:10:31",
                "updated_at" => "2022-08-11 09:10:31"
            ],
            [
                "id" => 46,
                "product_id" => 18,
                "category_id" => 100000,
                "created_at" => "2022-08-11 09:10:32",
                "updated_at" => "2022-08-11 09:10:32"
            ],
            [
                "id" => 48,
                "product_id" => 18,
                "category_id" => 100002,
                "created_at" => "2022-08-11 09:10:32",
                "updated_at" => "2022-08-11 09:10:32"
            ],
            [
                "id" => 49,
                "product_id" => 18,
                "category_id" => 100003,
                "created_at" => "2022-08-11 09:10:32",
                "updated_at" => "2022-08-11 09:10:32"
            ],
            [
                "id" => 50,
                "product_id" => 18,
                "category_id" => 100004,
                "created_at" => "2022-08-11 09:10:32",
                "updated_at" => "2022-08-11 09:10:32"
            ],
            [
                "id" => 51,
                "product_id" => 18,
                "category_id" => 100005,
                "created_at" => "2022-08-11 09:10:32",
                "updated_at" => "2022-08-11 09:10:32"
            ],
            [
                "id" => 52,
                "product_id" => 18,
                "category_id" => 100008,
                "created_at" => "2022-08-11 09:10:32",
                "updated_at" => "2022-08-11 09:10:32"
            ],
            [
                "id" => 53,
                "product_id" => 18,
                "category_id" => 100007,
                "created_at" => "2022-08-11 09:10:32",
                "updated_at" => "2022-08-11 09:10:32"
            ],
            [
                "id" => 54,
                "product_id" => 18,
                "category_id" => 100009,
                "created_at" => "2022-08-11 09:10:32",
                "updated_at" => "2022-08-11 09:10:32"
            ],
            [
                "id" => 55,
                "product_id" => 19,
                "category_id" => 100000,
                "created_at" => "2022-08-11 09:10:33",
                "updated_at" => "2022-08-11 09:10:33"
            ],
            [
                "id" => 57,
                "product_id" => 19,
                "category_id" => 100002,
                "created_at" => "2022-08-11 09:10:33",
                "updated_at" => "2022-08-11 09:10:33"
            ],
            [
                "id" => 58,
                "product_id" => 19,
                "category_id" => 100003,
                "created_at" => "2022-08-11 09:10:33",
                "updated_at" => "2022-08-11 09:10:33"
            ],
            [
                "id" => 59,
                "product_id" => 19,
                "category_id" => 100004,
                "created_at" => "2022-08-11 09:10:33",
                "updated_at" => "2022-08-11 09:10:33"
            ],
            [
                "id" => 60,
                "product_id" => 19,
                "category_id" => 100005,
                "created_at" => "2022-08-11 09:10:33",
                "updated_at" => "2022-08-11 09:10:33"
            ],
            [
                "id" => 61,
                "product_id" => 19,
                "category_id" => 100008,
                "created_at" => "2022-08-11 09:10:33",
                "updated_at" => "2022-08-11 09:10:33"
            ],
            [
                "id" => 62,
                "product_id" => 19,
                "category_id" => 100007,
                "created_at" => "2022-08-11 09:10:33",
                "updated_at" => "2022-08-11 09:10:33"
            ],
            [
                "id" => 63,
                "product_id" => 19,
                "category_id" => 100009,
                "created_at" => "2022-08-11 09:10:33",
                "updated_at" => "2022-08-11 09:10:33"
            ],
            [
                "id" => 64,
                "product_id" => 20,
                "category_id" => 100000,
                "created_at" => "2022-08-11 09:10:37",
                "updated_at" => "2022-08-11 09:10:37"
            ],
            [
                "id" => 66,
                "product_id" => 20,
                "category_id" => 100002,
                "created_at" => "2022-08-11 09:10:37",
                "updated_at" => "2022-08-11 09:10:37"
            ],
            [
                "id" => 67,
                "product_id" => 20,
                "category_id" => 100003,
                "created_at" => "2022-08-11 09:10:37",
                "updated_at" => "2022-08-11 09:10:37"
            ],
            [
                "id" => 68,
                "product_id" => 20,
                "category_id" => 100004,
                "created_at" => "2022-08-11 09:10:37",
                "updated_at" => "2022-08-11 09:10:37"
            ],
            [
                "id" => 69,
                "product_id" => 20,
                "category_id" => 100005,
                "created_at" => "2022-08-11 09:10:37",
                "updated_at" => "2022-08-11 09:10:37"
            ],
            [
                "id" => 70,
                "product_id" => 20,
                "category_id" => 100008,
                "created_at" => "2022-08-11 09:10:37",
                "updated_at" => "2022-08-11 09:10:37"
            ],
            [
                "id" => 71,
                "product_id" => 20,
                "category_id" => 100007,
                "created_at" => "2022-08-11 09:10:37",
                "updated_at" => "2022-08-11 09:10:37"
            ],
            [
                "id" => 72,
                "product_id" => 20,
                "category_id" => 100009,
                "created_at" => "2022-08-11 09:10:37",
                "updated_at" => "2022-08-11 09:10:37"
            ],
            [
                "id" => 76,
                "product_id" => 1,
                "category_id" => 100015,
                "created_at" => "2022-08-12 03:36:51",
                "updated_at" => "2022-08-12 03:36:51"
            ],
            [
                "id" => 79,
                "product_id" => 2,
                "category_id" => 100013,
                "created_at" => "2022-08-12 05:34:45",
                "updated_at" => "2022-08-12 05:34:45"
            ],
            [
                "id" => 81,
                "product_id" => 2,
                "category_id" => 100010,
                "created_at" => "2022-08-12 05:34:45",
                "updated_at" => "2022-08-12 05:34:45"
            ],
            [
                "id" => 82,
                "product_id" => 2,
                "category_id" => 100011,
                "created_at" => "2022-08-12 05:34:45",
                "updated_at" => "2022-08-12 05:34:45"
            ],
            [
                "id" => 85,
                "product_id" => 2,
                "category_id" => 100012,
                "created_at" => "2022-08-12 05:34:45",
                "updated_at" => "2022-08-12 05:34:45"
            ],
            [
                "id" => 86,
                "product_id" => 2,
                "category_id" => 100014,
                "created_at" => "2022-08-12 05:34:45",
                "updated_at" => "2022-08-12 05:34:45"
            ],
            [
                "id" => 87,
                "product_id" => 2,
                "category_id" => 100015,
                "created_at" => "2022-08-12 05:34:45",
                "updated_at" => "2022-08-12 05:34:45"
            ],
            [
                "id" => 88,
                "product_id" => 2,
                "category_id" => 100019,
                "created_at" => "2022-08-12 05:34:45",
                "updated_at" => "2022-08-12 05:34:45"
            ],
            [
                "id" => 89,
                "product_id" => 2,
                "category_id" => 100018,
                "created_at" => "2022-08-12 05:34:45",
                "updated_at" => "2022-08-12 05:34:45"
            ],
            [
                "id" => 90,
                "product_id" => 2,
                "category_id" => 100020,
                "created_at" => "2022-08-12 05:34:45",
                "updated_at" => "2022-08-12 05:34:45"
            ],
            [
                "id" => 104,
                "product_id" => 31,
                "category_id" => 100011,
                "created_at" => "2022-08-12 08:29:52",
                "updated_at" => "2022-08-12 08:29:52"
            ],
            [
                "id" => 105,
                "product_id" => 32,
                "category_id" => 100008,
                "created_at" => "2022-08-12 08:36:17",
                "updated_at" => "2022-08-12 08:36:17"
            ],
            [
                "id" => 106,
                "product_id" => 32,
                "category_id" => 100011,
                "created_at" => "2022-08-12 08:36:17",
                "updated_at" => "2022-08-12 08:36:17"
            ],
            [
                "id" => 107,
                "product_id" => 32,
                "category_id" => 100012,
                "created_at" => "2022-08-12 08:36:17",
                "updated_at" => "2022-08-12 08:36:17"
            ],
            [
                "id" => 108,
                "product_id" => 32,
                "category_id" => 100014,
                "created_at" => "2022-08-12 08:36:17",
                "updated_at" => "2022-08-12 08:36:17"
            ],
            [
                "id" => 109,
                "product_id" => 34,
                "category_id" => 100013,
                "created_at" => "2022-08-15 01:19:51",
                "updated_at" => "2022-08-15 01:19:51"
            ],
            [
                "id" => 110,
                "product_id" => 35,
                "category_id" => 100011,
                "created_at" => "2022-08-15 01:30:23",
                "updated_at" => "2022-08-15 01:30:23"
            ],
            [
                "id" => 111,
                "product_id" => 35,
                "category_id" => 100012,
                "created_at" => "2022-08-15 01:30:23",
                "updated_at" => "2022-08-15 01:30:23"
            ],
            [
                "id" => 112,
                "product_id" => 39,
                "category_id" => 100013,
                "created_at" => "2022-08-16 07:15:45",
                "updated_at" => "2022-08-16 07:15:45"
            ],
            [
                "id" => 113,
                "product_id" => 39,
                "category_id" => 100000,
                "created_at" => "2022-08-16 07:15:45",
                "updated_at" => "2022-08-16 07:15:45"
            ],
            [
                "id" => 116,
                "product_id" => 39,
                "category_id" => 100002,
                "created_at" => "2022-08-16 07:15:45",
                "updated_at" => "2022-08-16 07:15:45"
            ],
            [
                "id" => 117,
                "product_id" => 39,
                "category_id" => 100010,
                "created_at" => "2022-08-16 07:15:45",
                "updated_at" => "2022-08-16 07:15:45"
            ],
            [
                "id" => 118,
                "product_id" => 39,
                "category_id" => 100003,
                "created_at" => "2022-08-16 07:15:45",
                "updated_at" => "2022-08-16 07:15:45"
            ],
            [
                "id" => 119,
                "product_id" => 39,
                "category_id" => 100004,
                "created_at" => "2022-08-16 07:15:45",
                "updated_at" => "2022-08-16 07:15:45"
            ],
            [
                "id" => 120,
                "product_id" => 39,
                "category_id" => 100005,
                "created_at" => "2022-08-16 07:15:45",
                "updated_at" => "2022-08-16 07:15:45"
            ],
            [
                "id" => 121,
                "product_id" => 39,
                "category_id" => 100008,
                "created_at" => "2022-08-16 07:15:45",
                "updated_at" => "2022-08-16 07:15:45"
            ],
            [
                "id" => 122,
                "product_id" => 39,
                "category_id" => 100011,
                "created_at" => "2022-08-16 07:15:45",
                "updated_at" => "2022-08-16 07:15:45"
            ],
            [
                "id" => 123,
                "product_id" => 39,
                "category_id" => 100012,
                "created_at" => "2022-08-16 07:15:45",
                "updated_at" => "2022-08-16 07:15:45"
            ],
            [
                "id" => 124,
                "product_id" => 39,
                "category_id" => 100014,
                "created_at" => "2022-08-16 07:15:45",
                "updated_at" => "2022-08-16 07:15:45"
            ],
            [
                "id" => 125,
                "product_id" => 39,
                "category_id" => 100015,
                "created_at" => "2022-08-16 07:15:45",
                "updated_at" => "2022-08-16 07:15:45"
            ],
            [
                "id" => 126,
                "product_id" => 39,
                "category_id" => 100019,
                "created_at" => "2022-08-16 07:15:45",
                "updated_at" => "2022-08-16 07:15:45"
            ],
        ];
    }

    public function getProductDescriptions()
    {
        return [
            [
                "id" => 19,
                "product_id" => 16,
                "locale" => "zh_cn",
                "name" => "ddasda",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 20,
                "product_id" => 16,
                "locale" => "en",
                "name" => "3213123",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 23,
                "product_id" => 17,
                "locale" => "zh_cn",
                "name" => "ddasda",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 24,
                "product_id" => 17,
                "locale" => "en",
                "name" => "3213123",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 27,
                "product_id" => 18,
                "locale" => "zh_cn",
                "name" => "ddasda",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 28,
                "product_id" => 18,
                "locale" => "en",
                "name" => "3213123",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 31,
                "product_id" => 19,
                "locale" => "zh_cn",
                "name" => "ddasda",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 32,
                "product_id" => 19,
                "locale" => "en",
                "name" => "3213123",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 35,
                "product_id" => 20,
                "locale" => "zh_cn",
                "name" => "ddasda",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 36,
                "product_id" => 20,
                "locale" => "en",
                "name" => "3213123",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 65,
                "product_id" => 2,
                "locale" => "zh_cn",
                "name" => "中长款牛仔半身裙女春夏季2021新款薄款高腰开叉包臀长裙A字裙子",
                "content" => "fdsfsd",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 66,
                "product_id" => 2,
                "locale" => "en",
                "name" => "Mid-length denim skirt woman Spring/summer 2021 new thin high waisted slit hip wrap skirt A-line skirt",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 67,
                "product_id" => 3,
                "locale" => "zh_cn",
                "name" => "双肩包书包男女笔记本电脑包时尚潮流旅行背包",
                "content" => "测试下商品详情",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 68,
                "product_id" => 3,
                "locale" => "en",
                "name" => "Backpack Men and women laptop bag fashion trend travel backpack",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 75,
                "product_id" => 7,
                "locale" => "zh_cn",
                "name" => "轻便跑鞋女夏新款跑步运动鞋减震软底网面透气休闲运动鞋女鞋",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 76,
                "product_id" => 7,
                "locale" => "en",
                "name" => "Lightweight running shoes female summer new running shoes shock absorption soft bottom",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 79,
                "product_id" => 9,
                "locale" => "zh_cn",
                "name" => "春夏新品暗黑系甜辣风吊带裙欧根纱蓬蓬裙冷淡法式连衣裙女",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 80,
                "product_id" => 9,
                "locale" => "en",
                "name" => "Spring and summer NEW dark department of sweet hot wind sling skirt organza skirt cold French dress female",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 83,
                "product_id" => 11,
                "locale" => "zh_cn",
                "name" => "夏季新款polo领连衣裙女学院风减龄不规则下摆长裙子",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 84,
                "product_id" => 11,
                "locale" => "en",
                "name" => "New polo collar dress for summer women's college style aging irregular hem long skirt",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 85,
                "product_id" => 12,
                "locale" => "zh_cn",
                "name" => "凉鞋女款夏季2022年新款坡跟女鞋夏款松糕鞋高跟鞋子爆款女士",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 86,
                "product_id" => 12,
                "locale" => "en",
                "name" => "Sandal women's Summer 2022 new wedge women's shoes summer style",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 87,
                "product_id" => 13,
                "locale" => "zh_cn",
                "name" => "休闲polo衬衫连衣裙大码女装高级感夏2022新款小个子御姐",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 88,
                "product_id" => 13,
                "locale" => "en",
                "name" => "Casual Polo shirt dress large size women's senior sense summer 2022 new small royal sister",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 89,
                "product_id" => 14,
                "locale" => "zh_cn",
                "name" => "夏季套装短袖T恤男装一套搭配帅气潮情侣男生半袖上衣服",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 90,
                "product_id" => 14,
                "locale" => "en",
                "name" => "Summer suit short sleeve T-shirt men's suit with handsome fashionable couple boys half sleeve clothes",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 101,
                "product_id" => 28,
                "locale" => "zh_cn",
                "name" => "321",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 102,
                "product_id" => 28,
                "locale" => "en",
                "name" => "3123",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 105,
                "product_id" => 30,
                "locale" => "zh_cn",
                "name" => "1",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 106,
                "product_id" => 30,
                "locale" => "en",
                "name" => "1",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 115,
                "product_id" => 31,
                "locale" => "zh_cn",
                "name" => "中国乔丹",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 116,
                "product_id" => 31,
                "locale" => "en",
                "name" => "中国乔丹",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 125,
                "product_id" => 34,
                "locale" => "zh_cn",
                "name" => "芦荟胶",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 126,
                "product_id" => 34,
                "locale" => "en",
                "name" => "English芦荟胶",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 149,
                "product_id" => 32,
                "locale" => "zh_cn",
                "name" => "虎牌保温杯",
                "content" => "<p><img class=\"img-fluid\" src=\"../../catalog/demo/product/1.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/10.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/11.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/12.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/13.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/14.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/15.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/16.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/17.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/18.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/2.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/3.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/4.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/5.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/6.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/7.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/9.jpg\" /><img class=\"img-fluid\" src=\"../../catalog/demo/product/xq_01.jpg\" /></p>",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 150,
                "product_id" => 32,
                "locale" => "en",
                "name" => "虎牌保温杯",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 203,
                "product_id" => 6,
                "locale" => "zh_cn",
                "name" => "冰丝褶皱垂感圆领长袖T恤男宽松薄款高级感v领男装上衣",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 204,
                "product_id" => 6,
                "locale" => "en",
                "name" => "Ice silk drape feel round neck long sleeve T-shirt men loose thin senior sense",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 291,
                "product_id" => 39,
                "locale" => "zh_cn",
                "name" => "夏季新款女装法式气质洋气高级感温柔风吊带仙女连衣裙",
                "content" => "<p><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/18.jpg\" /></p>
<p>&nbsp;</p>
<p style=\"text-align=>center;\">&nbsp;</p>
<ol>
<li style=\"text-align=>center;\"><strong>连体裤</strong></li>
</ol>",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 292,
                "product_id" => 39,
                "locale" => "en",
                "name" => "Summer new women's French temperament Western style high-end gentle wind sling fairy dress",
                "content" => "<p><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/1.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/10.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/11.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/12.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/13.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/14.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/15.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/16.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/17.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/18.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/2.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/3.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/4.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/5.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/6.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/7.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/9.jpg\" /><img class=\"img-fluid\" style=\"display=>block; margin-left=>auto; margin-right=>auto;\" src=\"../../../catalog/demo/product/xq_01.jpg\" /></p>",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
                "created_at" => "2022-08-26 09:20:14",
                "updated_at" => "2022-08-26 09:20:14"
            ],
            [
                "id" => 293,
                "product_id" => 35,
                "locale" => "zh_cn",
                "name" => "气质通勤高街蛋青色挺括烟管裤9分裤套装下装22秋女",
                "content" => "<p><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">1、京东奶粉无忧险</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">京东金融携手阳光财险，为京东自营奶粉投保保险，给宝宝提供放心口粮。1、正品保障，假一赔三：消费者选购有&ldquo;奶粉无忧&rdquo;标识的京东自营奶粉商品均由阳光财产保险股份有限公司提供正品保证。发生保险事故后，以买家实付金额的三倍金额给予赔偿，最高赔付5万元。2、质量保证（过敏腹泻）：在京东自营店售出的承保商品导致宝贝过敏或腹泻，赔付已拆封商品实付金额，最高赔付2万元。</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">备注：实付金额为商品实际支付金额，不含店铺优惠券、店铺红包、赠品价值、及邮（运）费。</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">2、理赔流程</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">1）获取报告</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">正品险：获取国家认可的具备相关检测资质的第三方检测报告，且该报告是根据该奶粉所对应的国家标准进行检测出具的。</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">质量险：获取二级及二级以上医院开具的诊断证明书、门诊病历、出院小结、住院小结等材料。</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">2）出险报案</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">用户向京东发起理赔声明，同时拨打阳光财产保险股份有限公司客服电话95510报案。</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">3）资料提交</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">用户按保险公司要求提供购物凭证、检测报告、医疗证明等材料，提交保险公司审核。</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">4）查勘定损</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">保险公司安排专人查勘案件并对案件作出责任范围。</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">5）核损</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">保险公司确认责任范围后，在材料齐全的情况下，对案件损失作出确认。</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">6）进行赔偿</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">在责任明确，材料齐全的情况下对消费者的损失按照约定内容进行赔偿。</span></p>
<p>&nbsp;</p>
<p><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\"><img class=\"img-fluid\" src=\"../../../catalog/demo/product/1.jpg\" /></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\"><img class=\"img-fluid\" src=\"../../../catalog/demo/product/1.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/10.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/11.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/12.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/13.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/14.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/15.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/16.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/17.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/18.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/2.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/3.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/4.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/5.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/6.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/7.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/9.jpg\" /><img class=\"img-fluid\" src=\"../../../catalog/demo/product/xq_01.jpg\" /></span></p>",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 294,
                "product_id" => 35,
                "locale" => "en",
                "name" => "Temperament commuter high street egg cyan stiff cigarette pants 9 points pants suit bottoms 22 autumn women",
                "content" => "<p><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">1、京东奶粉无忧险</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">京东金融携手阳光财险，为京东自营奶粉投保保险，给宝宝提供放心口粮。1、正品保障，假一赔三：消费者选购有&ldquo;奶粉无忧&rdquo;标识的京东自营奶粉商品均由阳光财产保险股份有限公司提供正品保证。发生保险事故后，以买家实付金额的三倍金额给予赔偿，最高赔付5万元。2、质量保证（过敏腹泻）：在京东自营店售出的承保商品导致宝贝过敏或腹泻，赔付已拆封商品实付金额，最高赔付2万元。</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">备注：实付金额为商品实际支付金额，不含店铺优惠券、店铺红包、赠品价值、及邮（运）费。</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">2、理赔流程</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">1）获取报告</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">正品险：获取国家认可的具备相关检测资质的第三方检测报告，且该报告是根据该奶粉所对应的国家标准进行检测出具的。</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">质量险：获取二级及二级以上医院开具的诊断证明书、门诊病历、出院小结、住院小结等材料。</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">2）出险报案</span><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><em><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">用户向京东发起理赔声明，同时拨打阳光财产保险股份有限公司客服电话95510报案。</span></em><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><em><strong><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">3）资料提交</span></strong></em><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><strong><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">用户按保险公司要求提供购物凭证、检测报告、医疗证明等材料，提交保险公司审核。</span></strong><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><strong><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">4）查勘定损</span></strong><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><strong><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">保险公司安排专人查勘案件并对案件作出责任范围。</span></strong><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><strong><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">5）核损</span></strong><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><strong><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">保险公司确认责任范围后，在材料齐全的情况下，对案件损失作出确认。</span></strong><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><strong><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">6）进行赔偿</span></strong><br style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\" /><strong><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\">在责任明确，材料齐全的情况下对消费者的损失按照约定内容进行赔偿。</span></strong></p>
<p><strong><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\"><a title=\"百度\" href=\"http:www.baidu.com\" target=\"_blank\" rel=\"noopener\">http:www.baidu.com</a></span></strong></p>
<p><span style=\"color=>#666666; font-family=>tahoma, arial, 'Microsoft YaHei', 'Hiragino Sans GB', u5b8bu4f53, sans-serif; font-size=>12px; background-color=>#ffffff;\"><img class=\"img-fluid\" src=\"../../../catalog/demo/product/16.jpg\" /></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 295,
                "product_id" => 4,
                "locale" => "zh_cn",
                "name" => "男子 休闲鞋 TANJUN 天君 休闲鞋 运动鞋 812654",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 296,
                "product_id" => 4,
                "locale" => "en",
                "name" => "Men's casual shoes TANJUN Tianjun casual shoes sneakers 812654",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 297,
                "product_id" => 8,
                "locale" => "zh_cn",
                "name" => "夏季新款模糊数码直喷短袖上衣男装情侣纯棉t恤ins潮",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 298,
                "product_id" => 8,
                "locale" => "en",
                "name" => "Summer new fuzzy digital direct spray short sleeve top men's pair of cotton T-shirt Instagram trend",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 299,
                "product_id" => 5,
                "locale" => "zh_cn",
                "name" => "高级感男装夏季潮牌美式复古短袖t恤男士重磅纯棉宽松半袖男体恤",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 300,
                "product_id" => 5,
                "locale" => "en",
                "name" => "High sense men's summer fashion brand American vintage short sleeve T-shirt men",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 301,
                "product_id" => 10,
                "locale" => "zh_cn",
                "name" => "法式小众设计高级感连衣裙2022年新款收腰显瘦中长款裙子女夏",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 302,
                "product_id" => 10,
                "locale" => "en",
                "name" => "French niche design haute couture dress 2022 new waist",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 303,
                "product_id" => 1,
                "locale" => "zh_cn",
                "name" => "欧洲站夏季新款时尚休闲短裤热裤女裤运动家具纯棉韩版宽松百搭裤",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 304,
                "product_id" => 1,
                "locale" => "en",
                "name" => "European station summer new FASHION casual shorts hot pants female pants sports furniture pure cotton Korean version loose pants",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 305,
                "product_id" => 15,
                "locale" => "zh_cn",
                "name" => "男鞋2022夏季透气冲孔时尚休闲板鞋压花耐磨小白鞋男",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
            [
                "id" => 306,
                "product_id" => 15,
                "locale" => "en",
                "name" => "Male shoes 2022 summer breathable punching fashion casual shoes embossed wear resistant small white shoes male",
                "content" => "",
                "meta_title" => "",
                "meta_description" => "",
                "meta_keyword" => "",
            ],
        ];
    }

    public function getProductSkus()
    {
        return [
            [
                "id" => 14,
                "product_id" => 16,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "23",
                "sku" => "231",
                "price" => 324,
                "origin_price" => 35,
                "cost_price" => 43,
                "quantity" => 546,
                "is_default" => 1,
                "created_at" => "2022-08-11 09:10:30",
                "updated_at" => "2022-08-11 09:10:30",
                "images" => null
            ],
            [
                "id" => 15,
                "product_id" => 17,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "23",
                "sku" => "231",
                "price" => 324,
                "origin_price" => 35,
                "cost_price" => 43,
                "quantity" => 546,
                "is_default" => 1,
                "created_at" => "2022-08-11 09:10:31",
                "updated_at" => "2022-08-11 09:10:31",
                "images" => null
            ],
            [
                "id" => 16,
                "product_id" => 18,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "23",
                "sku" => "231",
                "price" => 324,
                "origin_price" => 35,
                "cost_price" => 43,
                "quantity" => 546,
                "is_default" => 1,
                "created_at" => "2022-08-11 09:10:32",
                "updated_at" => "2022-08-11 09:10:32",
                "images" => null
            ],
            [
                "id" => 17,
                "product_id" => 19,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "23",
                "sku" => "231",
                "price" => 324,
                "origin_price" => 35,
                "cost_price" => 43,
                "quantity" => 546,
                "is_default" => 1,
                "created_at" => "2022-08-11 09:10:33",
                "updated_at" => "2022-08-11 09:10:33",
                "images" => null
            ],
            [
                "id" => 18,
                "product_id" => 20,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "23",
                "sku" => "231",
                "price" => 324,
                "origin_price" => 35,
                "cost_price" => 43,
                "quantity" => 546,
                "is_default" => 1,
                "created_at" => "2022-08-11 09:10:37",
                "updated_at" => "2022-08-11 09:10:37",
                "images" => null
            ],
            [
                "id" => 44,
                "product_id" => 2,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "23",
                "sku" => "231",
                "price" => 324,
                "origin_price" => 35,
                "cost_price" => 43,
                "quantity" => 546,
                "is_default" => 1,
                "created_at" => "2022-08-12 05:34:45",
                "updated_at" => "2022-08-12 05:34:45",
                "images" => null
            ],
            [
                "id" => 45,
                "product_id" => 3,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "dpfiv-fdsf",
                "sku" => "dfufuuivvvvb",
                "price" => 299,
                "origin_price" => 299,
                "cost_price" => 1992,
                "quantity" => 444,
                "is_default" => 1,
                "created_at" => "2022-08-12 05:35:50",
                "updated_at" => "2022-08-12 05:35:50",
                "images" => null
            ],
            [
                "id" => 49,
                "product_id" => 7,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "fvhk-fds-fsdf-",
                "sku" => "fofofd--ffgg--",
                "price" => 99,
                "origin_price" => 299,
                "cost_price" => 299,
                "quantity" => 3333,
                "is_default" => 1,
                "created_at" => "2022-08-12 05:42:51",
                "updated_at" => "2022-08-12 05:42:51",
                "images" => null
            ],
            [
                "id" => 51,
                "product_id" => 9,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "4809328",
                "sku" => "ufsfsdf898=",
                "price" => 299,
                "origin_price" => 999,
                "cost_price" => 99,
                "quantity" => 99,
                "is_default" => 1,
                "created_at" => "2022-08-12 05:47:43",
                "updated_at" => "2022-08-12 05:47:43",
                "images" => null
            ],
            [
                "id" => 53,
                "product_id" => 11,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "fyuydf99f",
                "sku" => "vusodiuhv",
                "price" => 98,
                "origin_price" => 234,
                "cost_price" => 223,
                "quantity" => 2223,
                "is_default" => 1,
                "created_at" => "2022-08-12 05:49:19",
                "updated_at" => "2022-08-12 05:49:19",
                "images" => null
            ],
            [
                "id" => 54,
                "product_id" => 12,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "fsd8g8g7",
                "sku" => "pridhyyyii",
                "price" => 79,
                "origin_price" => 222,
                "cost_price" => 333,
                "quantity" => 2222,
                "is_default" => 1,
                "created_at" => "2022-08-12 05:51:05",
                "updated_at" => "2022-08-12 05:51:05",
                "images" => null
            ],
            [
                "id" => 55,
                "product_id" => 13,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "vdvs-gdg-ff",
                "sku" => "ddf00dfhsdkjvv",
                "price" => 199,
                "origin_price" => 333,
                "cost_price" => 333,
                "quantity" => 3445,
                "is_default" => 1,
                "created_at" => "2022-08-12 05:52:38",
                "updated_at" => "2022-08-12 05:52:38",
                "images" => null
            ],
            [
                "id" => 56,
                "product_id" => 14,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "csdfsdf",
                "sku" => "fffaaacsdsf",
                "price" => 299,
                "origin_price" => 433,
                "cost_price" => 234,
                "quantity" => 423,
                "is_default" => 1,
                "created_at" => "2022-08-12 05:53:44",
                "updated_at" => "2022-08-12 05:53:44",
                "images" => null
            ],
            [
                "id" => 62,
                "product_id" => 28,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "3",
                "sku" => "123",
                "price" => 213,
                "origin_price" => 213,
                "cost_price" => 213,
                "quantity" => 213,
                "is_default" => 1,
                "created_at" => "2022-08-12 07:48:13",
                "updated_at" => "2022-08-12 07:48:13",
                "images" => null
            ],
            [
                "id" => 63,
                "product_id" => 30,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "1",
                "sku" => "1",
                "price" => 30,
                "origin_price" => 10,
                "cost_price" => 10,
                "quantity" => 10,
                "is_default" => 1,
                "created_at" => "2022-08-12 08:24:17",
                "updated_at" => "2022-08-12 08:24:17",
                "images" => null
            ],
            [
                "id" => 67,
                "product_id" => 31,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "121",
                "sku" => "1212",
                "price" => 20.99,
                "origin_price" => 20.99,
                "cost_price" => 20.99,
                "quantity" => 999,
                "is_default" => 1,
                "created_at" => "2022-08-12 08:34:06",
                "updated_at" => "2022-08-12 08:34:06",
                "images" => null
            ],
            [
                "id" => 71,
                "product_id" => 34,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "1",
                "sku" => "089888",
                "price" => 20,
                "origin_price" => 10,
                "cost_price" => 10,
                "quantity" => 999,
                "is_default" => 1,
                "created_at" => "2022-08-15 01:23:41",
                "updated_at" => "2022-08-15 01:23:41",
                "images" => null
            ],
            [
                "id" => 80,
                "product_id" => 32,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "Q",
                "sku" => "1",
                "price" => 199999.99,
                "origin_price" => 100,
                "cost_price" => 100,
                "quantity" => 999,
                "is_default" => 1,
                "created_at" => "2022-08-15 02:05:45",
                "updated_at" => "2022-08-15 02:05:45",
                "images" => null
            ],
            [
                "id" => 141,
                "product_id" => 6,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "3123",
                "sku" => "cdsvfdbbbbbbb",
                "price" => 423,
                "origin_price" => 44232,
                "cost_price" => 3,
                "quantity" => 123123,
                "is_default" => 1,
                "created_at" => "2022-08-18 18:17:42",
                "updated_at" => "2022-08-18 18:17:42",
                "images" => null
            ],
            [
                "id" => 227,
                "product_id" => 39,
                "variants" => "[\"0\", \"0\"]",
                "position" => 0,
                "model" => "1",
                "sku" => "089888",
                "price" => 100,
                "origin_price" => 3534,
                "cost_price" => 3453,
                "quantity" => 999,
                "is_default" => 1,
                "created_at" => "2022-08-26 09:20:14",
                "updated_at" => "2022-08-26 09:20:14",
                "images" => "[\"catalog/demo/product/12.jpg\"]"
            ],
            [
                "id" => 228,
                "product_id" => 39,
                "variants" => "[\"0\", \"1\"]",
                "position" => 1,
                "model" => "2",
                "sku" => "s",
                "price" => 56,
                "origin_price" => 353,
                "cost_price" => 454,
                "quantity" => 454,
                "is_default" => 0,
                "created_at" => "2022-08-26 09:20:14",
                "updated_at" => "2022-08-26 09:20:14",
                "images" => "[\"catalog/demo/product/15.jpg\"]"
            ],
            [
                "id" => 229,
                "product_id" => 39,
                "variants" => "[\"1\", \"0\"]",
                "position" => 2,
                "model" => "3",
                "sku" => "sd",
                "price" => 454,
                "origin_price" => 353,
                "cost_price" => 345,
                "quantity" => 45,
                "is_default" => 0,
                "created_at" => "2022-08-26 09:20:14",
                "updated_at" => "2022-08-26 09:20:14",
                "images" => "[\"catalog/demo/product/18.jpg\"]"
            ],
            [
                "id" => 230,
                "product_id" => 39,
                "variants" => "[\"1\", \"1\"]",
                "position" => 3,
                "model" => "4",
                "sku" => "dsfds",
                "price" => 3534,
                "origin_price" => 353,
                "cost_price" => 4545,
                "quantity" => 45,
                "is_default" => 0,
                "created_at" => "2022-08-26 09:20:14",
                "updated_at" => "2022-08-26 09:20:14",
                "images" => "[\"catalog/demo/product/4.jpg\"]"
            ],
            [
                "id" => 231,
                "product_id" => 35,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "1",
                "sku" => "1",
                "price" => 100.99,
                "origin_price" => 50.99,
                "cost_price" => 30.99,
                "quantity" => 999,
                "is_default" => 1,
                "created_at" => "2022-08-26 09:22:05",
                "updated_at" => "2022-08-26 09:22:05",
                "images" => null
            ],
            [
                "id" => 232,
                "product_id" => 4,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "cufjjppvd-",
                "sku" => "ososividsuio",
                "price" => 99,
                "origin_price" => 333,
                "cost_price" => 333,
                "quantity" => 333,
                "is_default" => 1,
                "created_at" => "2022-08-26 09:22:33",
                "updated_at" => "2022-08-26 09:22:33",
                "images" => null
            ],
            [
                "id" => 233,
                "product_id" => 8,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "dsd989f",
                "sku" => "fidfivifuiuifff",
                "price" => 99,
                "origin_price" => 333,
                "cost_price" => 222,
                "quantity" => 2222,
                "is_default" => 1,
                "created_at" => "2022-08-26 09:22:44",
                "updated_at" => "2022-08-26 09:22:44",
                "images" => null
            ],
            [
                "id" => 234,
                "product_id" => 5,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "3123",
                "sku" => "3vjdfsl-jv-klsj",
                "price" => 999,
                "origin_price" => 2222,
                "cost_price" => 222,
                "quantity" => 42131,
                "is_default" => 1,
                "created_at" => "2022-08-26 09:22:53",
                "updated_at" => "2022-08-26 09:22:53",
                "images" => null
            ],
            [
                "id" => 235,
                "product_id" => 10,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "2312",
                "sku" => "312",
                "price" => 169,
                "origin_price" => 334,
                "cost_price" => 55,
                "quantity" => 33,
                "is_default" => 1,
                "created_at" => "2022-08-26 09:23:04",
                "updated_at" => "2022-08-26 09:23:04",
                "images" => null
            ],
            [
                "id" => 236,
                "product_id" => 1,
                "variants" => "[\"0\", \"0\"]",
                "position" => 0,
                "model" => "YL",
                "sku" => "yl1234",
                "price" => 88.3,
                "origin_price" => 2312,
                "cost_price" => 2312,
                "quantity" => 2222,
                "is_default" => 1,
                "created_at" => "2022-08-26 09:23:24",
                "updated_at" => "2022-08-26 09:23:24",
                "images" => "[\"catalog/demo/product/17.jpg\"]"
            ],
            [
                "id" => 237,
                "product_id" => 1,
                "variants" => "[\"0\", \"1\"]",
                "position" => 1,
                "model" => "YM",
                "sku" => "ym1234",
                "price" => 448.3,
                "origin_price" => 2312,
                "cost_price" => 2312,
                "quantity" => 0,
                "is_default" => 0,
                "created_at" => "2022-08-26 09:23:24",
                "updated_at" => "2022-08-26 09:23:24",
                "images" => "[\"catalog/demo/product/10.jpg\"]"
            ],
            [
                "id" => 238,
                "product_id" => 1,
                "variants" => "[\"1\", \"0\"]",
                "position" => 2,
                "model" => "GL",
                "sku" => "gl123",
                "price" => 18.3,
                "origin_price" => 2312,
                "cost_price" => 2312,
                "quantity" => 22,
                "is_default" => 0,
                "created_at" => "2022-08-26 09:23:24",
                "updated_at" => "2022-08-26 09:23:24",
                "images" => "[\"catalog/demo/product/17.jpg\"]"
            ],
            [
                "id" => 239,
                "product_id" => 1,
                "variants" => "[\"1\", \"1\"]",
                "position" => 3,
                "model" => "GM",
                "sku" => "gm123",
                "price" => 78.3,
                "origin_price" => 2312,
                "cost_price" => 2312,
                "quantity" => 3333,
                "is_default" => 0,
                "created_at" => "2022-08-26 09:23:24",
                "updated_at" => "2022-08-26 09:23:24",
                "images" => "[\"catalog/demo/product/10.jpg\"]"
            ],
            [
                "id" => 240,
                "product_id" => 15,
                "variants" => "\"\"",
                "position" => 0,
                "model" => "dsfs90fff-",
                "sku" => "ff-ggs-eeerrtt",
                "price" => 324,
                "origin_price" => 35,
                "cost_price" => 43,
                "quantity" => 546,
                "is_default" => 1,
                "created_at" => "2022-08-26 09:23:36",
                "updated_at" => "2022-08-26 09:23:36",
                "images" => null
            ],
        ];
    }
}
