<?php

return [

    'label' => 'Sipariş',

    'plural_label' => 'Siparişler',

    'breadcrumb' => [
        'manage' => 'Yönet',
    ],

    'transactions' => [
        'capture' => 'Tahsil Etmeye Hazır',
        'intent' => 'Ödemeye Hazır',
        'refund' => 'İade Edildi',
        'failed' => 'Başarısız',
    ],

    'table' => [
        'status' => [
            'label' => 'Durum',
        ],
        'reference' => [
            'label' => 'Referans',
        ],
        'customer_reference' => [
            'label' => 'Müşteri Referansı',
        ],
        'customer' => [
            'label' => 'Müşteri',
        ],
        'tags' => [
            'label' => 'Etiketler',
        ],
        'postcode' => [
            'label' => 'Posta Kodu',
        ],
        'email' => [
            'label' => 'E-posta',
            'copy_message' => 'E-posta adresi kopyalandı',
        ],
        'phone' => [
            'label' => 'Telefon',
        ],
        'total' => [
            'label' => 'Toplam',
        ],
        'date' => [
            'label' => 'Tarih',
        ],
        'new_customer' => [
            'label' => 'Müşteri Türü',
        ],
        'placed_after' => [
            'label' => 'Sonrasında verilen',
        ],
        'placed_before' => [
            'label' => 'Öncesinde verilen',
        ],
    ],

    'empty_state' => [
        'label' => 'Sipariş bulunamadı',
        'description' => '',
    ],

    'form' => [
        'address' => [
            'first_name' => [
                'label' => 'Ad',
            ],
            'last_name' => [
                'label' => 'Soyad',
            ],
            'line_one' => [
                'label' => 'Adres',
            ],
            'line_two' => [
                'label' => 'Adres 2',
            ],
            'line_three' => [
                'label' => 'Adres 3',
            ],
            'company_name' => [
                'label' => 'Firma Adı',
            ],
            'contact_phone' => [
                'label' => 'Telefon',
            ],
            'contact_email' => [
                'label' => 'E-posta',
            ],
            'city' => [
                'label' => 'Şehir',
            ],
            'state' => [
                'label' => 'Eyalet / İl',
            ],
            'postcode' => [
                'label' => 'Posta Kodu',
            ],
            'country_id' => [
                'label' => 'Ülke',
            ],
        ],

        'reference' => [
            'label' => 'Referans',
        ],
        'status' => [
            'label' => 'Durum',
        ],
        'transaction' => [
            'label' => 'Ödeme',
        ],
        'amount' => [
            'label' => 'Tutar',

            'hint' => [
                'less_than_total' => 'Toplam işlem tutarından daha az bir tutarı tahsil etmek üzeresiniz',
            ],
        ],

        'notes' => [
            'label' => 'Notlar',
        ],
        'confirm' => [
            'label' => 'Onayla',

            'alert' => 'Onay gerekiyor',

            'hint' => [
                'capture' => 'Bu ödemeyi tahsil etmek için onaylayın',
                'refund' => 'Bu tutuarı iade etmek için onaylayın',
            ],
        ],
    ],

    'infolist' => [
        'notes' => [
            'label' => 'Notlar',
            'placeholder' => 'Bu siparişte not yok',
        ],
        'delivery_instructions' => [
            'label' => 'Teslimat Talimatları',
        ],
        'shipping_total' => [
            'label' => 'Kargo Maliyeti',
        ],
        'paid' => [
            'label' => 'Ödendi',
        ],
        'refund' => [
            'label' => 'İade',
        ],
        'unit_price' => [
            'label' => 'Birim Fiyat',
        ],
        'quantity' => [
            'label' => 'Miktar',
        ],
        'sub_total' => [
            'label' => 'Ara Toplam',
        ],
        'discount_total' => [
            'label' => 'İndirim Toplamı',
        ],
        'total' => [
            'label' => 'Toplam',
        ],
        'current_stock_level' => [
            'message' => 'Mevcut Stok Seviyesi: :count',
        ],
        'purchase_stock_level' => [
            'message' => 'sipariş sırasında: :count',
        ],
        'status' => [
            'label' => 'Durum',
        ],
        'reference' => [
            'label' => 'Referans',
        ],
        'customer_reference' => [
            'label' => 'Müşteri Referansı',
        ],
        'channel' => [
            'label' => 'Kanal',
        ],
        'date_created' => [
            'label' => 'Oluşturulma Tarihi',
        ],
        'date_placed' => [
            'label' => 'Sipariş Tarihi',
        ],
        'new_returning' => [
            'label' => 'Yeni / Geri Dönen',
        ],
        'new_customer' => [
            'label' => 'Yeni Müşteri',
        ],
        'returning_customer' => [
            'label' => 'Geri Dönen Müşteri',
        ],
        'shipping_address' => [
            'label' => 'Teslimat Adresi',
        ],
        'billing_address' => [
            'label' => 'Fatura Adresi',
        ],
        'address_not_set' => [
            'label' => 'Adres ayarlanmadı',
        ],
        'billing_matches_shipping' => [
            'label' => 'Teslimat adresiyle aynı',
        ],
        'additional_info' => [
            'label' => 'Ek Bilgiler',
        ],
        'no_additional_info' => [
            'label' => 'Ek Bilgi Yok',
        ],
        'tags' => [
            'label' => 'Etiketler',
        ],
        'timeline' => [
            'label' => 'Zaman Çizelgesi',
        ],
        'transactions' => [
            'label' => 'Ödemeler',
            'placeholder' => 'Ödeme yok',
        ],
        'alert' => [
            'requires_capture' => 'Bu siparişin alınabilmesi için ödemenin tahsil edilmesi gerekiyor.',
            'partially_refunded' => 'Bu siparişin ücreti kısmen iade edildi.',
            'refunded' => 'Bu siparişin ücreti iade edildi.',
        ],
    ],

    'action' => [
        'bulk_update_status' => [
            'label' => 'Durumu Güncelle',
            'notification' => 'Sipariş durumu güncellendi',
        ],
        'update_status' => [
            'new_status' => [
                'label' => 'Yeni durum',
            ],
            'additional_content' => [
                'label' => 'Ek içerik',
            ],
            'additional_email_recipient' => [
                'label' => 'Ek e-posta alıcısı',
                'placeholder' => 'isteğe bağlı',
            ],
        ],
        'download_order_pdf' => [
            'label' => 'PDF İndir',
            'notification' => 'Siparişin PDF dosyası indiriliyor',
        ],
        'view_customer' => [
            'label' => 'Görüntüle',
        ],
        'edit_address' => [
            'label' => 'Düzenle',

            'notification' => [
                'error' => 'Hata',

                'billing_address' => [
                    'saved' => 'Fatura adresi kaydedildi',
                ],

                'shipping_address' => [
                    'saved' => 'Teslimat adresi kaydedildi',
                ],
            ],
        ],
        'edit_tags' => [
            'label' => 'Düzenle',
        ],
        'capture_payment' => [
            'label' => 'Ödemeyi Tahsil Et',

            'notification' => [
                'error' => 'Tahsil etmeyle ilgili bir sorun oluştu',
                'success' => 'Tahsil etme başarılı',
            ],
        ],
        'refund_payment' => [
            'label' => 'İade',

            'notification' => [
                'error' => 'İadeyle ilgili bir sorun oluştu',
                'success' => 'İade başarılı',
            ],
        ],
        'view' => [
            'label' => 'Görüntüle',
        ],
    ],

];
