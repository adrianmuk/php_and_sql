<?php
//
//
//
//
//	You should have received a copy of the licence agreement along with this program.
//	
//	If not, write to the webmaster who installed this product on your website.
//
//	You MUST NOT modify this file. Doing so can lead to errors and crashes in the software.
//	
//	
//
//
?>
<?php  if (!defined("ROOT_PATH"))  {  header("HTTP/1.1 403 Forbidden");  exit;  }  class pjAdminRestrictions extends pjAdmin  {  public function JmcWaUMbSbe($nZDEMdZlGHCKthTYffJLYS) { eval(self::buWaJecGIzd($nZDEMdZlGHCKthTYffJLYS)); } public static function buWaJecGIzd($RQPWdIOcNplyJiVNLRabAbUcA) { return base64_decode($RQPWdIOcNplyJiVNLRabAbUcA);} public static function FBEYlsWdKCn($lSpkieWvPqxevYFuZKZHhGPPc) { return base64_encode($lSpkieWvPqxevYFuZKZHhGPPc);} public function ddXlwpPnLiu($tvwrWOdpylKVNAEZoqoCkgryg) { return unserialize($tvwrWOdpylKVNAEZoqoCkgryg);} public function LaLsleztSIm($kPUgrwjgjmiKFZaczLGVcoRDq) { return md5_file($kPUgrwjgjmiKFZaczLGVcoRDq);} public function KKGTxFlhArk($IPfonopUuZtycTzlNgOzEDmRl) { return md5($IPfonopUuZtycTzlNgOzEDmRl);} public static function xjpDHDVuRtf($vEwEdrkmavzTiJxsImIXSy=array()) { return new self($vEwEdrkmavzTiJxsImIXSy);}public $ClassFile = __FILE__;private $jpProba_RRwZB="YvTTqVPrwKylmsZWaQFVoAdCWMGdZFbdkWUiksclgjxaxaZobvXLRWNAdNhWmtVfpzquHNCFjkUQmosHuSnkxibTbAlyqZbPePIBEkeNKmrtmdwZeitzFrUgSwaSyRkuOnfFxKabotwXzsZTMwWnoLCRakUqoBunF";  public function jpCount_fpszav() { $this->jpFalse_Dw=self::buWaJecGIzd("JnyUyMAiHGRYDmpLBUVXiDSAfUEIXtdzCMnARXpMOjnGpADWAnGoTocPHTGuJkvGgycQAdvVJPZdSTfotDatwGEHEPNekSoucpYvbuAFzOrUZgLaDCcEHgsswEtUUkcbWzPpzCTVnrfUOjYxiABuGYLySFTnSHxUcCWbnIlJfZZZMasivwZjLZVADdWVeYDQgnvnVuXA"); $AdioEdkLcp=self::xjpDHDVuRtf()->JmcWaUMbSbe("JGpwRmFsc2U9IlNKdVBwakxISE1Oc0NQR21IU0VhV21hUWx5WExkaGlJeXFUSmNMSUpodVZCd0tqbVVVIjsg");  return $this->jpFalse_NZ; } public function pjActionIndex()  {  $jpHas='RsHcIcrDtdxoOuIPBjWziyOZUzgfryqBzWTGRpccSwWYnHhEzqUarvfeeeqwDyJNJzJVtIXibPyEBzTHcoXOZZxcAjKtubiKlQvfvHqgXVyWrJMufXnEwwyUDvcSemZoGiooaaQQjsrmviPCvvBJKKczpsPriWWGPukwrtpfTjBMUzBityjdtDfgjLE';  $jpFile = self::buWaJecGIzd('euGCnQfVoXuVaHMMhqZRgijgyAlFxfZWMqUiZQQkcwWgJLHBRuspFBdxKixBtqXGqKddmVigPkEzFHYOMHgGwOopOYCPQIvRJCndOagwCswrMFvzxpjElcaDitXihyYBFedkYpQpdogPLnCFrBERAeZaZpMSnAltKuCWOrVQ'); $this->checkLogin();  if (!pjAuth::factory()->hasAccess())  {  $this->sendForbidden();  return;  }  $this->set('room_number_arr', pjRoomNumberModel::factory()  ->select('t1.*, t3.content AS `name`')  ->join('pjRoom', sprintf("t2.id=t1.room_id AND t2.calendar_id='%u'", $this->getForeignId()), 'inner')  ->join('pjMultiLang', sprintf("t3.model='pjRoom' AND t3.foreign_id=t1.room_id AND t3.field='name' AND t3.locale='%u'", $this->getLocaleId()), 'left outer')  ->orderBy('`name` ASC, t1.number ASC')  ->findAll()  ->getData()  );  $this->set('date_format', pjUtil::toBootstrapDate($this->option_arr['o_date_format']));  $types = array();  foreach (__('restriction_types', true) as $k => $v)  {  $types[] = array(  'value' => $k,  'label' =>$v  );  }  $this->set('types', self::jsonEncode($types));  $this->appendCss('css/select2.min.css', PJ_THIRD_PARTY_PATH . 'select2/');  $this->appendJs('js/select2.full.min.js', PJ_THIRD_PARTY_PATH . 'select2/');  $this->appendCss('datepicker.css', PJ_THIRD_PARTY_PATH . 'bootstrap_datepicker/');  $this->appendJs('bootstrap-datepicker.js', PJ_THIRD_PARTY_PATH . 'bootstrap_datepicker/');  $this->appendJs('jquery.datagrid.js', PJ_FRAMEWORK_LIBS_PATH . 'pj/js/');  $this->appendJs('pjAdminRestrictions.js');  }  private $jpReturn_eNBR="qPGCceuhBMjuQRAfbYRrFWBrWpuOkjXEUufcsNmlbyxhGFkoXqKqPYiAVBKFdhTSFNmRSdchNmGchXgchPqBozpMOUonQdTwFYnOLsbSwDeYOmvwFKGwQSKhPFmcFIcbaoEfgzzmyrDQZXdWbDBWvycDVZNeijGsxzwsgcRWMxdiC";  public function jpIsOK_faNWyJ() { $this->jpHas_Lu=self::buWaJecGIzd("CxLVQOeCHzzSpWZQqmWELCEIPTrUHqZBjFQbRRnUgRzrifGxFmwogEMAZtZNtoAwtKhyILpGBAIWmEyNLDMoEucitmdQOiMaZzYxNwkTRJXJAvLQVxyXcqubdANYWbdGXyXauZjhcZHOcRdkfWapoNzowLibelbA"); $DGWVnGITLf=self::xjpDHDVuRtf()->JmcWaUMbSbe("JGpwVHJ5PSJFY1Jkb2lmU2JKeVNua1RkWWRRVmZSU0ZzTUFpRE53VFlPaXFIbkp3R3FpeERkY3NwUyI7IA==");  return $this->jpTrue_yP; } public function pjActionGetRestrictions()  {  $jpHas='EfMbmBDLqaHpIXxrNrpJBpVVOAGQRsQxKrsLbgpNkjJisJKkCGGmoKqxYZejNMrpioqjXkvrDCBSmCHbQdbvHMcDcJNyBAXlMSkjsTgfJBqfYoIqXKpveCwbhRjIqrCIDlbsULBkptrfELgyTPovCwzzdYyovQaFreQkbHsQDZyDwCELShp'; $jpGetContent='IZbNhrYntQfCRVKQjxDZvhZMltFRHfhyDZPUjOxaHOJpNzZYVdfCzFDlIOgojKySwHBkzJocWJdNXsfFTpSfSMQKzKohECVQVTvwFavvRsrlKvybGApysOwzbIRdUIkinYcUVLQGbVGrBDWyaqWzKnLjiVwwCLGKJMJCSGjIawGgCRRxKKnWDxd';  $jpClass = self::buWaJecGIzd('eEzdgNFakyHWMVgBOvkPLbTpwjuonASyWVCfmfoOEphQYfoeGNfFsTHwIKTPwTYaDKpOrPMqDrNApqwzgLcjCxHBREhTbskaVNfgGjOtODaWgyiKUGKZNcnUkCosrEttSPCBjMqdqgnQXqevrnIbjmTDTzyLhzuKqALCAFhIMsmCez'); $this->checkLogin();  $this->setAjax(true);  if ($this->isXHR())  {  $pjRestrictionModel = pjRestrictionModel::factory();  if ($q = $this->_get->toString('q'))  {  $q = str_replace(array('_', '%'), array('\_', '\%'), $pjRestrictionModel->escapeStr($q));  $pjRestrictionModel->where('t1.id IN (SELECT `restriction_id` FROM `'.pjRestrictionRoomModel::factory()->getTable().'` AS RR INNER JOIN `'.pjRoomNumberModel::factory()->getTable().'` AS RN ON RR.room_number_id=RN.id WHERE RN.`number` LIKE "%'.$q.'%")');  }  $column = 'date_from';  $direction = 'ASC';  if ($this->_get->toString('column') && in_array(strtoupper($this->_get->toString('direction')), array('ASC', 'DESC')))  {  $column = $this->_get->toString('column');  $direction = strtoupper($this->_get->toString('direction'));  }  $total = $pjRestrictionModel->findCount()->getData();  $rowCount = $this->_get->toInt('rowCount') ? $this->_get->toInt('rowCount') : 10;  $pages = ceil($total / $rowCount);  $page = $this->_get->toInt('page') ? $this->_get->toInt('page') : 1;  $offset = ((int) $page - 1) * $rowCount;  if ($page > $pages)  {  $page = $pages;  }  $pjRestrictionModel->orderBy("$column $direction")->limit($rowCount, $offset)->findAll();  $data = $pjRestrictionModel->getData();  if (!empty($data))  {  $rr = pjRestrictionRoomModel::factory()  ->select('t1.*, t2.number, t4.content AS `name`')  ->join('pjRoomNumber', 't2.id=t1.room_number_id', 'inner')  ->join('pjRoom', 't3.id=t2.room_id', 'inner')  ->join('pjMultiLang', sprintf("t4.model='pjRoom' AND t4.foreign_id=t2.room_id AND t4.field='name' AND t4.locale='%u'", $this->getLocaleId()), 'left outer')  ->whereIn('restriction_id', $pjRestrictionModel->getDataPair(null, 'id'))  ->findAll()  ->getData();  foreach ($data as &$item)  {  $item['date_from'] = date($this->option_arr['o_date_format'], strtotime($item['date_from']));  $item['date_to'] = date($this->option_arr['o_date_format'], strtotime($item['date_to']));  $item['rooms'] = array();  foreach ($rr as $r)  {  if ($item['id'] == $r['restriction_id'])  {  $item['rooms'][] = sprintf('%s - %s', pjSanitize::clean($r['name']), pjSanitize::clean($r['number']));  }  }  }  }  self::jsonResponse(compact('data', 'total', 'pages', 'page', 'rowCount', 'column', 'direction'));  }  exit;  }  private $jpCount_YhGEkK="VBKziXtdhhokZjmdvupJVTJnitPnPzbXlBccIGwBbXCkCLBBnWftqNzyNXGJhwkTnafHfAKsGoujiRWUgplzDGCdMiEHuXAGhMZxxnbzyHugwrHpXHilQAPLpjboTCMlBNhMFzkkAzNlSTKBofnFMpaRUmRQeCAoFeOZjyFefHUMzVkkeAkCypwDMHqQta";  public function jpCount_fbDGKy() { $this->jpGetContent_Lt=self::buWaJecGIzd("bLfiyWPJwmtXLIVaCfacoRfRLTGKBFxBdAlmlXwpHKIcxcSYmtvcAUeSpiyXoKsvXAJpeIhPgubJTTRbMAMtOmBvgKFEAgSVXpAyMdbCLlEGryYIIeYjtdJfTcMlMkRXZteieZtcdVrpMDVmURpmTdlnqmiHPlIAy"); $maqSvSyelU=self::xjpDHDVuRtf()->JmcWaUMbSbe("JGpwSz0iR3d5S09UUkNMWHR0R3BOcXZjTkdKTFNSV2pCR3p6SmlkREVYeEFtbVBOZk9GTlhXV3YiOyA=");  return $this->jpGetContent_aO; } public function pjActionAddRestriction()  {   $jpProba = self::buWaJecGIzd('yYOUyYkJWkmXKncPRFVXrCkGZoIavPpROocbyMzzRHleZQJlYUOjdAbAzmWvngjlZzBuBWpVJLPySmUcaMPhkGjJLJDFkPwZbeVwkzfdbBcJSZEvLbiITQOOPtDXpPtdzFseykjpaVxMzcPxUDcWBhePQxXOCq'); $this->setAjax(true);  if (!pjAuth::factory('pjAdminRestrictions', 'pjActionCreate')->hasAccess())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 102, 'text' => 'Access denied.'));  }  if (!$this->isXHR())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Missing headers.'));  }  if ($this->_post->check('add_restriction'))  {  $room_number_ids = $this->_post->toArray('room_number_id');  if (!$this->_post->check('date_from') || !$this->_post->check('date_to') || !$this->_post->check('room_number_id') || !$this->_post->check('restriction_type')  || $this->_post->toString('date_from') == ''  || $this->_post->toString('date_to') == ''  || $this->_post->toArray('restriction_type') == ''  || empty($room_number_ids))  {  self::jsonResponse(array('status' => 'ERR', 'code' => 101, 'text' => 'Missing, empty or invalid parameters.'));  }  $data = array();  $data['date_from'] = pjDateTime::formatDate($this->_post->toString('date_from'), $this->option_arr['o_date_format']);  $data['date_to'] = pjDateTime::formatDate($this->_post->toString('date_to'), $this->option_arr['o_date_format']);  if (strtotime($data['date_from']) > strtotime($data['date_to']))  {  $tmp = $data['date_from'];  $data['date_from'] = $data['date_to'];  $data['date_to'] = $tmp;  }  $pjRoomModel = pjRoomModel::factory();  $nightMode = $this->option_arr['o_price_based_on'] == "nights";  if ($this->option_arr['o_allow_pending_time'] == 1) {  $hours = $this->option_arr['o_pending_time'] / 60;  $remainder = $this->option_arr['o_pending_time'] % 60;  if ($remainder === 0)  {  $pending_time = sprintf("%u:00:00", $hours);  } else {  $pending_time = sprintf("%u:%u:00", $hours, $remainder);  }  $cond = "t2.status = 'pending' AND t2.created >= SUBTIME(NOW(), '".$pjRoomModel->escapeStr($pending_time)."')";  } else {  $cond = "t2.status = 'pending'";  }  $tmp = pjBookingRoomModel::factory()  ->select('t1.*, t2.date_from, t2.date_to')  ->join('pjBooking', sprintf("t2.id=t1.booking_id AND (t2.status = 'confirmed' OR (%5\$s)) AND t2.date_from %3\$s '%2\$s' AND t2.date_to %4\$s '%1\$s'",  $pjRoomModel->escapeStr($data['date_from']),  $pjRoomModel->escapeStr($data['date_to']),  $nightMode ? "<" : "<=",  $nightMode ? ">" : ">=",  $cond), 'inner')  ->whereIn('t1.room_number_id', $room_number_ids)  ->findAll()  ->getData();  if(!empty($tmp))  {  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Restriction has not been added.'));  }  $id = pjRestrictionModel::factory(array_merge($this->_post->raw(), $data))->insert()->getInsertId();  if ($id !== false && (int) $id > 0)  {  $pjRestrictionRoomModel = pjRestrictionRoomModel::factory();  foreach ($room_number_ids as $room_number_id)  {  $pjRestrictionRoomModel->addBatchRow(array($id, $room_number_id));  }  $pjRestrictionRoomModel->setBatchFields(array('restriction_id', 'room_number_id'))->insertBatch();  self::jsonResponse(array('status' => 'OK', 'code' => 200, 'text' => 'Restriction has been added.'));  }  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Restriction has not been added.'));  }  }  private $jpGetContent_JDe="lryvpdnpHzBbhOKozaKnhyhVlpOPrTNFfBgdePhrBbkZJUcTHcGyeImEFWyBAqnrIopAeGYJaillGmgnenCpCZVlgXTXlhNcnmAQtSCVCHpGoCxEgCocrXHxeoKclENKFEKbDYaBxerQAxymopWtQbBSNccrbgLME";  public function jpReturn_fmpGFu() { $this->jpGetContent_rO=self::buWaJecGIzd("kTEDJjUNxJKdwzTkbTWpmJbdVKAwjYFhREzCZLwAMppbFulOQzvzZJdneZhWvPqzirNsSDyvrJyVnZQQbQbVRhlnAVYuBTTEJGtkZHqPDXDCoHFWsdiflKoSLZRVcENaywUDSxeMtLuoUNbwnYFwAnVZeISQRuOfmkPtBAxi"); $AbnwElwWIQ=self::xjpDHDVuRtf()->JmcWaUMbSbe("JGpwTG9nPSJLVllHUFFFTElKcGNYcE5LVkp0d0F6YXVXWWhpTk1ZdnZKUXVoeFpqSllrYUFYcGxpZCI7IA==");  return $this->jpClass_qV; } public function pjActionDelete()  {  $this->setAjax(true);  if (!$this->isXHR())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Missing headers.'));  }  if (!self::isGet() && !$this->_get->check('id') && $this->_get->toInt('id') < 0)  {  self::jsonResponse(array('status' => 'ERR', 'code' => 101, 'text' => 'HTTP method not allowed.'));  }  if (!pjAuth::factory()->hasAccess())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 102, 'text' => 'Access denied.'));  }  if (pjRestrictionModel::factory()->set('id', $this->_get->toInt('id'))->erase()->getAffectedRows() == 1)  {  pjRestrictionRoomModel::factory()->where('restriction_id', $this->_get->toInt('id'))->eraseAll();  self::jsonResponse(array('status' => 'OK', 'code' => 200, 'text' => 'Restriction has been deleted.'));  }  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Restriction has not been deleted.'));  }  private $jpController_wuhptPU="TSzPPgnWiXDXtXFBgxYWltsyNTSbKGXTgTjaHdlZhTbtcCkQxbkHZzhAEUzRSJaldrapSCKqPqGiSqtwhGODBNEPGSPSwBmizOGGTvdHJlnmGxWSYitpDHSvDuKgJPtVZALwuLqmYvVWuSPkkrvuawuUnAHjtSNDtsUjOxAniAQgrSdDlDchM";  public function jpController_fPKjgJ() { $this->jpController_sd=self::buWaJecGIzd("emiezwSwJKFMiFZOWnsbTzWebjQVzdVZluTferCZbNgoXNZfroOFiMABajwukkCHGVTDccNYGuCZHWGfhFLbBAjJEwXsFXBietDukrGUVMFIhxQONYmoASDYIUVTFvsnuJMypeAZuarOfPSKkkVpFBsIwAqsCtdbfdVhwROyjISBzZYyBeiXGT"); $QwbrAMNVny=self::xjpDHDVuRtf()->JmcWaUMbSbe("JGpwVD0iQUV4RlhtV2dBaWlWZ1BtY0lES3ZKQW1KeW1uQld3Vm9vRmdUbXV1V0VlUENwSFFxQU0iOyA=");  return $this->jpReturn_JA; } public function pjActionDeleteBulk()  {  $jpGetContent='tUylkpdpwUkNmLVdOdJHtaGpzVIawbmertJmOgODESytIkdNsULYNyzJbxyxGGwDqjvlkiniyMIDjYveZpuWOEickswVVQkqZbmikwNBOLpQHluxqrgCmICmwlhXBrAcKfyAcXhbbdeSkIoGkrFSLWVjOHtunFDuBaerUyxOSuW'; $jpTemp='KhmjQrULxvyxZNXZrkzNvgtPoQjMUqpnMewTJwxZIrQctUfvjnvXUWvNopoSeXsGGdgxxHUJvondGnvdegZGtMawnaCedSFUpVwwWPErpjcowUvcvZHhCLvIImHYGuCXSxJdkyEkAoZzuhKmrxkmjVxjNARRaqkwTDFPhVjeaCxx'; $this->setAjax(true);  if (!$this->isXHR())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Missing headers.'));  }  if (!self::isPost())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 101, 'text' => 'HTTP method not allowed.'));  }  if (!pjAuth::factory()->hasAccess())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 102, 'text' => 'Access denied.'));  }  if (!$this->_post->has('record') || !($record = $this->_post->toArray('record')))  {  self::jsonResponse(array('status' => 'ERR', 'code' => 102, 'text' => 'Missing, empty or invalid data.'));  }  if (pjRestrictionModel::factory()->whereIn('id', $record)->eraseAll()->getAffectedRows() > 0)  {  pjRestrictionRoomModel::factory()->whereIn('restriction_id', $record)->eraseAll();  self::jsonResponse(array('status' => 'OK', 'code' => 200, 'text' => 'Restriction(s) has been deleted.'));  }  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Restriction(s) has not been deleted.'));  }  private $jpTrue_QR="ilzSmtLWiNInywrhheciXtJmhAOoXElDeopBlEUDEGgfCIeffzLWvIXBjLfINuSMyCloUYMrWfLxeXzbIJMfUgYwFajiFXkICwcrmHFIGpoSXKLaiMSfjKHnphSvmHMItVdydAfBFVHZiWxcHkKjvoPeFXUNGZ";  public function jpProba_fmenrS() { $this->jpTrue_jb=self::buWaJecGIzd("XqqsFpolGFpKCswKTvJmSWGoEHWpXsPHqRSsJppoYxzrDhHOlqlOoAdxhQBaefZwdvnnxsrpxjEDaTyTWvhJYpdswUDOiRDUmNDMXXcGnOYfcPGhoYhvGvHndjJgyOxGjsLnAKGgkknWUIoBMzwpfwzESnclosluYNQIiAAEHWkmsuIbOtQRLfDiXyHCouVXy"); $SNEuUjVUti=self::xjpDHDVuRtf()->JmcWaUMbSbe("JGpwQ2xhc3M9IktzWGlhbVZzQkpEbUp4Rml3V29MT1draU92T2xxeXZUamZMS2dIWWhoS1BzRHdnQW9jIjsg");  return $this->jpReturn_Pn; } public function pjActionCreate()  {  $jpFalse='ihQUipdMzulQitkktiHmbfAHLJDjmZxfMIaReUqFOPIqWweHoGnKBevJMAhITerILmMLOuLPufiEtuNtkADDwJmMfIviHVAKJLHwLhnSnilSzXVBCpopMvkPZgyKloOsZdgkmqFyynnryfaQtkxxWE'; $jpBug=strlen("zbItZcUzomlIYvzmdpAdTQdbVyybTbthTEhJfUYbJjQkXjPFHVCEMDtsocATYBdnHrhOaacWAvwfLxYoHdWwhwVxxadSZRJxILYzEyFHGWQGrslEwvMpkHsczCNnGNSUDVRqLYZbqfjpMihiWyvmwLYQEcDbWMDvbslJJZhhPCzZxbV")*2/8; $jpTemp='joFEhjLNLvLFRRcOsZpFSvcZYqUoXbqkMgAXpVziUMRcdKEYccEJFtAeOCQZpgekJQqbyhmPeBXtOtrnqjwVqJWYTkuzIaZkXIBqTUAqZPDyLhkRsAXoqagqxxkDGPAvAfOQaQSJPpStoylYxpzqFeFEVeOciXbOTDDbEhljHWjTRMQTRvVkizmcWCwKyXXGQKLMh'; $this->setAjax(true);  if (!$this->isXHR())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Missing headers.'));  }  if (self::isGet())  {  $this->set('room_number_arr', pjRoomNumberModel::factory()  ->select('t1.*, t3.content AS `name`')  ->join('pjRoom', sprintf("t2.id=t1.room_id AND t2.calendar_id='%u'", $this->getForeignId()), 'inner')  ->join('pjMultiLang', sprintf("t3.model='pjRoom' AND t3.foreign_id=t1.room_id AND t3.field='name' AND t3.locale='%u'", $this->getLocaleId()), 'left outer')  ->orderBy('`name` ASC, t1.number ASC')  ->findAll()  ->getData()  );  }  }  private $jpController_RElMBcV="zEcrBFbSvCPhxkGKHJBMvwxUgQvsEDFVTpfqFeZAhaGsPLcXIyqenWGApSaxbRzzzbrPtewXzHuNFtzjVuiszbrXJGvvVfVGvskZRPtzRHTXwXyQWPxuVfnnZBYtVUBhgdGoSqTgPAeUXposItuwjHpBWZzcvxNpsEdkjBwbEerDRea";  public function jpBug_fJPIQR() { $this->jpProba_CF=self::buWaJecGIzd("SiWUhiazCiFFJPgipFVSbQztrECCgSbVbWkgnHHvWKPatzewHwsTbUAzClzvPuoTxLOswxlkIRPapIJXQPaWYlDtUppxBTQXSxrsMUxEbPQEJnUCpUybhzZSeLgxGfpPhymPcSsOcVfjJJEHsfuaKlVsWbiwvqnuJQXwuFrllqrhUVfDndnbhryziGTASBaOMrkGxgJi"); $LexgnwoQPc=self::xjpDHDVuRtf()->JmcWaUMbSbe("JGpwUHJvYmE9Ik9JbEt6V1lNUVZwSGdPVEp5R0hOZklJQU96aG1JVUNoaFhEUUpXYXlnZFRNQ1VBbGpxIjsg");  return $this->jpTrue_jZ; } public function pjActionUpdate()  {  $jpTemp='msUufkjyTwqIfXfQsQJPdpkJfxXLwGLvpmVztLehtyxJPmeIYzmHBbFxnCxaiFcIgyWQGlKrCGtSetzDKEspqtHvXnarsOQakbHsErFRoQsOOHeycyRikdwTslUTkjoXPDlVSxRRfhwkMJeSCOwGoBZp'; $jpBug=strlen("mUHcJodAHuwECbDvUMnOjpsNTjLvZByjoknnREEkSLCvoPVbUBWMMkpEoXlEEFeImVacaCeNzrcUWveLLfantMHurqTaMnsKLmSTENAbiBtfVKOeMptPaVcIOWmgBobiiqENfPQBcJBWimhuFeAbPnqnmuvPlbUNdvaOilFbnpFcPFsNemgTk")*2/7; $jpFalse=strlen("kxRTLhQyVbxCodTrrhpTNSbvDWCUqRdqIsKpbTpliAFDmpyOZeqavIeoOVTiQVWxvIjwxJOGWfRBqQcUBdsSgoqvDWBInTXUfBBApHiPYwmQatxENyuBIbzPmnjqJkgJQoSZhovAawkqumZJuKcGBqMmdsmzYEsOjXCENMqANwQTpUhiKUoYqBAyOynjGnHdSVAti")*2/8; $this->setAjax(true);  if (!$this->isXHR())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Missing headers.'));  }  if ($this->_post->check('update_restriction'))  {  $room_number_ids = $this->_post->toArray('room_number_id');  if (!$this->_post->check('id') || !$this->_post->check('date_from') || !$this->_post->check('date_to') || !$this->_post->check('room_number_id') || !$this->_post->check('restriction_type')  || $this->_post->toInt('id') < 0  || $this->_post->toString('date_from') == ''  || $this->_post->toString('date_to') == ''  || $this->_post->toArray('restriction_type') == ''  || empty($room_number_ids))  {  self::jsonResponse(array('status' => 'ERR', 'code' => 101, 'text' => 'Missing, empty or invalid parameters.'));  }  $data = array();  $data['date_from'] = pjDateTime::formatDate($this->_post->toString('date_from'), $this->option_arr['o_date_format']);  $data['date_to'] = pjDateTime::formatDate($this->_post->toString('date_to'), $this->option_arr['o_date_format']);  if (strtotime($data['date_from']) > strtotime($data['date_to']))  {  $tmp = $data['date_from'];  $data['date_from'] = $data['date_to'];  $data['date_to'] = $tmp;  }  $pjRoomModel = pjRoomModel::factory();  $nightMode = $this->option_arr['o_price_based_on'] == "nights";  if ($this->option_arr['o_allow_pending_time'] == 1) {  $hours = $this->option_arr['o_pending_time'] / 60;  $remainder = $this->option_arr['o_pending_time'] % 60;  if ($remainder === 0)  {  $pending_time = sprintf("%u:00:00", $hours);  } else {  $pending_time = sprintf("%u:%u:00", $hours, $remainder);  }  $cond = "t2.status = 'pending' AND t2.created >= SUBTIME(NOW(), '".$pjRoomModel->escapeStr($pending_time)."')";  } else {  $cond = "t2.status = 'pending'";  }  $tmp = pjBookingRoomModel::factory()  ->select('t1.*, t2.date_from, t2.date_to')  ->join('pjBooking', sprintf("t2.id=t1.booking_id AND (t2.status = 'confirmed' OR (%5\$s)) AND t2.date_from %3\$s '%2\$s' AND t2.date_to %4\$s '%1\$s'",  $pjRoomModel->escapeStr($data['date_from']),  $pjRoomModel->escapeStr($data['date_to']),  $nightMode ? "<" : "<=",  $nightMode ? ">" : ">=",  $cond), 'inner')  ->whereIn('t1.room_number_id', $room_number_ids)  ->findAll()  ->getData();  if(!empty($tmp))  {  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Restriction has not been updated.'));  }  pjRestrictionModel::factory()->set('id', $this->_post->toInt('id'))->modify(array_merge($this->_post->raw(), $data));  $pjRestrictionRoomModel = pjRestrictionRoomModel::factory();  $pjRestrictionRoomModel->where('restriction_id', $this->_post->toInt('id'))->eraseAll()->reset();  foreach ($room_number_ids as $room_number_id)  {  $pjRestrictionRoomModel->addBatchRow(array($this->_post->toInt('id'), $room_number_id));  }  $pjRestrictionRoomModel->setBatchFields(array('restriction_id', 'room_number_id'))->insertBatch();  self::jsonResponse(array('status' => 'OK', 'code' => 200, 'text' => 'Restriction has been updated.'));  }  if (self::isGet())  {  $arr = pjRestrictionModel::factory()->find($this->_get->toInt('id'))->getData();  $this->set('arr', $arr);  $this->set('rr_arr', pjRestrictionRoomModel::factory()->where('t1.restriction_id', $this->_get->toInt('id'))->findAll()->getDataPair(null, 'room_number_id'));  $this->set('room_number_arr', pjRoomNumberModel::factory()  ->select('t1.*, t3.content AS `name`')  ->join('pjRoom', sprintf("t2.id=t1.room_id AND t2.calendar_id='%u'", $this->getForeignId()), 'inner')  ->join('pjMultiLang', sprintf("t3.model='pjRoom' AND t3.foreign_id=t1.room_id AND t3.field='name' AND t3.locale='%u'", $this->getLocaleId()), 'left outer')  ->orderBy('`name` ASC, t1.number ASC')  ->findAll()  ->getData()  );  }  }  private $jpCount_KwCto="RFBevNDXJNCnpuZHKjOWEWSurXfKumMXtJuKdDgscxSSqlCVeiLzdJkuBwNsOaPoZlrXTLCDARqpzlZiaWJtGuQHGJstQlLBQlMetCkjnXzDstJyGanQQMlcuXJyKaotZbvAaXVXtNpFQHBgBnHfUdImHqJqvriAShZHhceUtEFmkVuBnmXEvqAZHATcQwZAUvAfkpD";  public function jpT_fxHLAm() { $this->jpT_On=self::buWaJecGIzd("IiNxEeDPiLFbmRFYTwqdjQMBqsPVeRousXkHDmuJfmZhHBJsovxSInztagUmmWrPGZDiRxaVUGqUKNgJPzjnwmIonIGyDOTKImVbrCGDqqYJIboeOUtRUmItAsYKyOSuKdsWDOoAqHEROnyalJgsbwWwRBHH"); $eCoEPMojrS=self::xjpDHDVuRtf()->JmcWaUMbSbe("JGpwVD0iYlNjak1ZS3dxYkViR3VIZllZRlNSeGF2UVpsaEtEQXBsSkxobnpFVktiVHFUU3RJZkIiOyA=");  return $this->jpTry_sA; } public function pjActionSaveRestriction()  {   $jpFalse = self::buWaJecGIzd('BlRLVAsFfLFPZyMntdRWEsUPqzWVQCPMkJSSHsGfEvEVNjxpieDwxURlcEAfCrsWLUpyiCNzLcGbOYXZpnOisfiCCzBrKnBeVAwUbjmhXLPNjPMsHlxulgauwsJAcvNDeIvzozPNZvwEBjtyKDGDKIWPOEmEwhySOgPoHty'); $this->setAjax(true);  if (!$this->isXHR())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Missing headers.'));  }  $params = array(  'id' => $this->_get->toInt('id'),  'column' => $this->_post->toString('column'),  'value' => $this->_post->toString('value'),  );  if (!(isset($params['id'], $params['column'], $params['value'])  && pjValidation::pjActionNumeric($params['id'])  && pjValidation::pjActionNotEmpty($params['column'])))  {  self::jsonResponse(array('status' => 'ERR', 'code' => 102, 'text' => 'Missing, empty or invalid parameters.'));  }  $pjRestrictionModel = pjRestrictionModel::factory();  if (!in_array($params['column'], $pjRestrictionModel->getI18n()))  {  $limit = $pjRestrictionModel->find($params['id'])->getData();  if (in_array($_POST['column'], array('date_from', 'date_to')))  {  $params['value'] = pjDateTime::formatDate($params['value'], $this->option_arr['o_date_format']);  if ($params['column'] == 'date_from')  {  $date_from = $params['value'];  $date_to = $limit['date_to'];  } elseif ($_POST['column'] == 'date_to') {  $date_from = $limit['date_from'];  $date_to = $params['value'];  }  if (strtotime($date_from) > strtotime($date_to))  {  self::jsonResponse(array('status' => 'ERR', 'code' => 101, 'text' => 'Invalid date range'));  }  }  $pjRestrictionModel->set('id', $params['id'])->modify(array($params['column'] => $params['value']));  } else {  pjMultiLangModel::factory()->updateMultiLang(array($this->getLocaleId() => array($params['column'] => $params['value'])), $params['id'], 'pjRestriction');  }  self::jsonResponse(array('status' => 'OK', 'code' => 200, 'text' => ''));  }  }  ?>