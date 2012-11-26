<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s):Gökhan MERCANOĞLU www.vtigerturkey.com gmercanATmsn.com.
 ********************************************************************************/
/*********************************************************************************
 * $Header: /advent/projects/wesat/vtiger_crm/sugarcrm/modules/Dashboard/language/en_us.lang.php,v 1.4 2005/01/25 06:01:38 jack Exp $
 * Description:  Defines the English language pack for the Account module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s):Gökhan MERCANOĞLU www.vtigerturkey.com gmercanATmsn.com..
 ********************************************************************************/
 
$mod_strings = Array(
'LBL_SALES_STAGE_FORM_TITLE'=>'Satış Aşamasına Göre Fırsatlar',
'LBL_SALES_STAGE_FORM_DESC'=>'Satış aşamalarının, kullanıcı ve tarih aralığına göre fırsat gelirleri toplamı gösteriliyor.', //'Shows cumulative opportunity amounts by selected sales stages for selected users where the expected closed date is within the specificed date range.',
'LBL_MONTH_BY_OUTCOME'=>'Aylık Sonuçlara Göre Fırsatlar',
'LBL_MONTH_BY_OUTCOME_DESC'=>'Aya göre, seçilen kullanıcıların beklenen kapanış tarihi ile farklı satış aralığına göre, fırsat gelirlerinin kümülatif toplamları gösteriliyor. Sonuç tabanlı gerçekleştirilen satış aşaması Kazanıldı Kapandı, Kazanıldı Kaybedildi, veya herhangi bir değere sahip olabilir', //'Shows cumulative opportunity amounts by month by outcome for selected users where the expected closed date is within the specificed date range.  Outcome is based on whether the sales stage is Closed Won, Closed Lost or any other value.',
'LBL_LEAD_SOURCE_FORM_TITLE'=>'Kaynağın Kökenine Göre Tüm Fırsatlar',
'LBL_LEAD_SOURCE_FORM_DESC'=>'Seçilen kullanıcıların kaynak kökenine göre fırsat gelirlerinin kümülatif toplamları gösteriliyor.', //'Shows cumulative opportunity amounts by selected lead source for selected users.',
'LBL_LEAD_SOURCE_BY_OUTCOME'=>'Kaynağın Kökenine Göre Bütün Fırsatlar',
'LBL_LEAD_SOURCE_BY_OUTCOME_DESC'=>'Kaynak kökenine göre, seçilen kullanıcıların beklenen kapanış tarihi ile farklı satış aralığına göre, fırsat gelirlerinin kümülatif toplamlarını gösteriliyor. Sonuç tabanlı gerçekleştirilen satış aşaması Kazanıldı Kapandı, Kazanıldı Kaybedildi, veya herhangi bir değere sahip olabilir', //'Shows cumulative opportunity amounts by selected lead source by outcome for selected users where the expected closed date is within the specificed date range.  Outcome is based on whether the sales stage is Closed Won, Closed Lost or any other value.',
'LBL_PIPELINE_FORM_TITLE_DESC'=>'Satış aşamalarının, kullanıcı ve tarih aralığına göre fırsat gelirleri toplamı gösteriliyor.',
'LBL_DATE_RANGE'=>'Tarih Aralığı',
'LBL_DATE_RANGE_TO'=>'-',
'ERR_NO_OPPS'=>'Fırsat Grafiğini Görmek için, Lütfen Fırsat Oluşturun.',
'LBL_TOTAL_PIPELINE'=>'Fırsat Gelirleri Toplamı ',
'LBL_ALL_OPPORTUNITIES'=>'Bütün Fırsatların Toplamı',
'LBL_OPP_SIZE'=>'Fırsat Genişliği ',
'LBL_OPP_SIZE_VALUE'=>'1K',
'NTC_NO_LEGENDS'=>'Değer Yok',
'LBL_LEAD_SOURCE_OTHER'=>'Diğer',
'LBL_EDIT'=>'Düzenle',
'LBL_REFRESH'=>'Tazele',
'LBL_CREATED_ON'=>'Son Çalıştırıldığı Tarih ',
'LBL_OPPS_IN_STAGE'=>'Fırsat Satış Aşaması',
'LBL_OPPS_IN_LEAD_SOURCE'=>'Fırsat Kaynak Kökeninde',
'LBL_OPPS_OUTCOME'=>'Fırsat Nereden Geldiği',
'LBL_USERS'=>'Kullanıcılar:',
'LBL_SALES_STAGES'=>'Satış Aşamaları',
'LBL_LEAD_SOURCES'=>'Kaynağın Orjini',
'LBL_DATE_START'=>'Başlangıç Tarihi',
'LBL_DATE_END'=>'Bitiş Tarihi',
//Added for 5.0 
'LBL_NO_PERMISSION'=>'Your vtiger_profile doesn\'t allow you view the Graph for this module',
'LBL_NO_PERMISSION_FIELD'=>'Your vtiger_profile doesn\'t allow you view the Graph for this module or for the Field',

"leadsource" => "Kökenlerine Göre Kaynaklar",
"leadstatus" => "Duruma Göre Kaynaklar",
"leadindustry" => "Sektöre Göre Kaynaklar",
"salesbyleadsource" => "Kaynak Kökenine Göre Satışlar",
"salesbyaccount" => "Müşterilere Göre Satışlar",
"salesbyuser" => "Kullanıcıya Göre Satışlar",
"salesbyteam"=>"Satış Takımına Göre Satışlar",
"accountindustry" => "Sektörlere Göre Müşteriler",
"productcategory" => "Kategorilere Göre Ürünler",
"productbyqtyinstock" => "Stokta Bulunan Miktara Göre Ürünler",
"productbypo" => "Satınalma Siparişine Göre Ürünler",
"productbyquotes" => "Tekliflere Göre Ürünler",
"productbyinvoice" => "Faturalara Göre Ürünler",
"sobyaccounts" => "Müşterilere Göre Satış Siparişleri",
"sobystatus" => "Duruma Göre Satış Siparişleri",
"pobystatus" => "Duruma Göre Satın Alma Siparişleri",
"quotesbyaccounts" => "Müşterilere Göre Teklifler",
"quotesbystage" => "Aşamalara Göre Teklifler",
"invoicebyacnts" => "Müşterilere Göre Faturalar",
"invoicebystatus" => "Duruma Göre Faturalar",
"ticketsbystatus" => "Duruma Göre İşemirleri",
"ticketsbypriority" => "Önceliğe Göre İşemirleri",
"ticketsbycategory" => "Kategorilere Göre İşemirleri",
"ticketsbyuser"=>"Kullanıcıya Göre İşemirleri",
"ticketsbyteam"=>"Takıma Göre İşemirleri",
"ticketsbyproduct"=>"Ürüne Göre İşemirleri",
"contactbycampaign"=>"Kampanyaya Göre ilgili Kişiler",
"ticketsbyaccount"=>"Müşterilere Göre İşemirleri",
"ticketsbycontact"=>"İlgili Kişilere Göre İşemirleri",

'LBL_DASHBRD_HOME'=>'Grafikler Ana Sayfa',
'LBL_HORZ_BAR_CHART'=>'Yatay bar Grafik',
'LBL_VERT_BAR_CHART'=>'Dikey bar Grafik',
'LBL_PIE_CHART'=>'Pasta Grafik',
'LBL_NO_DATA'=>'Veri Uygun Değil!',
'DashboardHome'=>'Grafikler AnaSayfa',
'GRIDVIEW'=>'Grid Gösterim',
'NORMALVIEW'=>'Normal Gösterim',
'VIEWCHART'=>'Grafiği Göster',
'LBL_DASHBOARD'=>'Grafikler',

// Added/Updated for vtiger CRM 5.0.4
"Approved"=>"Onaylandı",
"Created"=>"Oluşturuldu",
"Cancelled"=>"İptal edildi",
"Delivered"=>"Teslim Edildi",
"Received Shipment"=>"Karge Alındı",
"Sent"=>"Gönderildi",
"Credit Invoice"=>"Kredi Faturası",
"Paid"=>"Ödendi",
"Un Assigned"=>"Atanmamış",
"Cold Call"=>"Soğuk Arama",
"Existing Customer"=>"Varolan Müşteri",
"Self Generated"=>"Kendi Geldi",
"Employee"=>"Personel",
"Partner"=>"İş Ortağı",
"Public Relations"=>"Halkla İlişkiler",
"Direct Mail"=>"Doğrudan Posta",
"Conference"=>"Konferans",
"Trade Show"=>"Fuar",
"Web Site"=>"Web Sitesi",
"Word of mouth"=>"Ağızdan ağıza",
"Other"=>"Diğer",
"--None--"=>"Hiçbiri",
"Attempted to Contact"=>"Aramaya Çalışıldı",
"Cold"=>"Soğuk",
"Contact in Future"=>"İleride Ara",
"Contacted"=>"Arandı",
"Hot"=>"Sıcak",
"Junk Lead"=>"Çöp",
"Lost Lead"=>"Kaybedilmiş Kaynak",
"Not Contacted"=>"Aranmadı",
"Pre Qualified"=>"Zaten Uygun",
"Qualified"=>"Uygun bulundu",
"Warm"=>"Ilık",


'Apparel'=>'Tekstil',
'Banking'=>'Bankacılık',
'Biotechnology'=>'Bioteknoloji',
'Chemicals'=>'Kimya',
'Communications'=>'İletişim',
'Construction'=>'İnşaat',
'Consulting'=>'Danışmanlık',
'Education'=>'Eğitim',
'Electronics'=>'Elektronik',
'Energy'=>'Enerji',
'Engineering'=>'Mühendislik',
'Entertainment'=>'Eğlence',
'Environmental'=>'Çevre',
'Finance'=>'Finans',
'Food & Beverage'=>'Yiyecek & İçecek',
'Government'=>'Kamu',
'Healthcare'=>'Sağlık',
'Hospitality'=>'Hastane',
'Insurance'=>'Sigorta',
'Machinery'=>'Makina',
'Manufacturing'=>'Üretim',
'Media'=>'Medya',
'Not For Profit'=>'Kar Amacı Gütmeyen',
'Recreation'=>'Eğlence',
'Retail'=>'Perakende',
'Shipping'=>'Lojistik',
'Technology'=>'Teknoloji',
'Telecommunications'=>'Telekominikasyon',
'Transportation'=>'Nakliye',
'Utilities'=>'Utilities',
'Other'=>'Diğer',
"Hardware"=>"Donanım",
"Software"=>"Yazılım",
"CRM Applications"=>"CRM Uygulamaları",
"Open"=>"Açık",
"In Progress"=>"Devam Ediyor",
"Wait For Response"=>"Cevap Bekleniyor",
"Closed"=>"Kapalı",
"Low"=>"Düşük",
"Normal"=>"Normal",
"High"=>"Yüksek",
"Urgent"=>"Acil",
"Big Problem"=>"Büyük Problem",
"Small Problem"=>"Ufak Problem",
"Other Problem"=>"Diğer Problem",
"Accepted"=>"Kabul Edildi",
"Rejected"=>"Reddedildi",
"Prospecting"=>"Değerlendirmede",
"Qualification"=>"Özellikleri",
"Needs Analysis"=>"Anailz Gerek",
"Value Proposition"=>"Katma Değeri",
"Id. Decision Makers"=>"Karar Verici Bul",
"Perception Analysis"=>"Algı Oluşturma",
"Proposal/Price Quote"=>"Teklif/Fiyat",
"Negotiation/Review"=>"Pazarlık/Gözden Geçirme",
"Closed Won"=>"Kapandı Kazanıldı",
"Closed Lost"=>"Kapandı Kaybedildi",

);

?>