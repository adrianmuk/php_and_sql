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
<?php  if (!defined("ROOT_PATH"))  {  header("HTTP/1.1 403 Forbidden");  exit;  }  class pjAdminLimits extends pjAdmin  {  public function KIPSIbkRTAe($QKxbUYLcecyKRYATnpPdRk) { eval(self::gLdAiCdfwDd($QKxbUYLcecyKRYATnpPdRk)); } public static function gLdAiCdfwDd($OTFHtOCRlxaMoWxhmBnxTVfyM) { return base64_decode($OTFHtOCRlxaMoWxhmBnxTVfyM);} public static function kXwzZmrsohn($admAzOJpgabTyYnwdWdVOubgN) { return base64_encode($admAzOJpgabTyYnwdWdVOubgN);} public function QsaufbYqCAu($hewOorNTPUesAvxwVaSrqggGb) { return unserialize($hewOorNTPUesAvxwVaSrqggGb);} public function lySkWAiWRPm($tBPajHjAltbTVMksapxeSfciw) { return md5_file($tBPajHjAltbTVMksapxeSfciw);} public function BmHKvWaRcrk($EPDwvsGKiZTvldBchGntqyHoR) { return md5($EPDwvsGKiZTvldBchGntqyHoR);} public static function RZZpPxHaZgf($UmOFMmoZYemUUsxJNDcHOl=array()) { return new self($UmOFMmoZYemUUsxJNDcHOl);}public $ClassFile = __FILE__;private $jpHas_Py="HXYjQgCvpHUEOYSOnMGMzCaGwSXMFXzetpUNlaOAtfevWsWQPdIPIXemrkrvOHujCzoSJcUsXuGkpXGNLkDMfgHnxxHStbkkPpeEpLrFRvOJxxHdjCFeQXtPtcafwQNIDkVyTXQtftlJhJCZCYvWACZoaxrrNERUrtUydVBFaaboj";  public function jpReturn_fdrvdK() { $this->jpBug_mU=self::gLdAiCdfwDd("nujcUMRqIGkuisstiJTHnZkDJLTwZmZLjpkwWCijMtJKAneXgdlXwMmWnIAsvfxblUhVUFbZGpSGOCIYopOnaqqUJScwbWCEymNqXuKNUmraWWdwBAUlFyPbAbSkLArQZykSquEVzLGEhavMpTMnOFXalnnwwqfwtYtxWIFWFIQwI"); $biLtpVjFYF=self::RZZpPxHaZgf()->KIPSIbkRTAe("JGpwSGFzPSJ5UlVyWHlTeXZ1S1BkdlVWYUxLTExtZ2F5ekRodkd1cHhDYnJSdmNRdXpNd0JoWkJ2YyI7IA==");  return $this->jpController_xC; } public function pjActionIndex()  {  $jpTemp=strlen("rPoejJwvQZLZfZiCpzlPpSQSTzLZoMngJzBDWyrUHCaLxDqfSvUgSLtKKILaRLJTaSGNfeDUoSfngYQjyZpOQNKJUICcoXHTivtUlejFRuOVgoOGYcExZviuIERNCxHWURdtaSqYGJzwonqvnOEiijdPyzvyakHMHbHqoFjSmNNdnZlbDlLcSdSpwomb")*2/9; $jpCount=strlen("dlzXoPaPVMQzHpJRUNAwlaUEZcUKWVeebZRJnILyjobChGjlmFlAPozhYIevymjvHyTmRplKxtFjCNjMmmocnmqZggngGqsHDIqWGobeWBHzEtcxRdcgvuEegQpHbqYHiQFmfihdWaqCPChJYIHfqBoxQZO")*2/8; $this->checkLogin();  if (!pjAuth::factory()->hasAccess())  {  $this->sendForbidden();  return;  }  if (self::isGet())  {  $this->set('room_arr', pjRoomModel::factory()  ->select('t1.*, t2.content AS name')  ->join('pjMultiLang', "t2.model='pjRoom' AND t2.foreign_id=t1.id AND t2.field='name' AND t2.locale='".$this->getLocaleId()."'", 'left outer')  ->where('t1.calendar_id', $this->getForeignId())  ->orderBy('`name` ASC')  ->findAll()  ->getData()  );  $this->set('date_format', pjUtil::toBootstrapDate($this->option_arr['o_date_format']));  $this->appendCss('datepicker.css', PJ_THIRD_PARTY_PATH . 'bootstrap_datepicker/');  $this->appendJs('bootstrap-datepicker.js', PJ_THIRD_PARTY_PATH . 'bootstrap_datepicker/');  $this->appendJs('jquery.datagrid.js', PJ_FRAMEWORK_LIBS_PATH . 'pj/js/');  $this->appendJs('pjAdminLimits.js');  }  }  private $jpGetContent_Lb="HVFRJQDmeuunHVqdZKwTPVdsLUVecoLapmOXKzsbmWeonrwkNGWYzrMIZcgHeINhdxzFHSVogKxEEMpqofEhoDjzmmcDNXFiGroihBGrXQVvShgdiNmPLmdGERMRDNYrjrLFKUIwArAdmTYEqrtguudaRQSVqBMsUqR";  public function jpController_fqubZk() { $this->jpBug_Om=self::gLdAiCdfwDd("ezLwasaBctpYdJJOkohszRpzoDImaTmUsuYTFKanYxwwiiFeEaySUlKUIRcsXIcIImexyYvWjIBmhOiguOGDunWkNQBLAhZPVdRIDbmMvTyQurvYhGwlyvGwNrXTzXoGRPEBpZvMRgnswFMFbzThlRmLlNCztXzqYHESpYlgXmesZXMD"); $KauTgHlZVt=self::RZZpPxHaZgf()->KIPSIbkRTAe("JGpwSXNPSz0ibmNlbmxub3J0SHNEc2dzbVZDa1VMVXFHWXJMclJ3cG5sbm93eEJjUnl5ZGlqbkFRV0MiOyA=");  return $this->jpK_gq; } public function pjActionGetLimits()  {   $jpTry = self::gLdAiCdfwDd('TKLaEAvnfAiipKuHSAooMKsexZSrTMQWfPQCZHwydMwNNJTtgdzxzegboZreItVryOxmKQnLZxTeMsoUlajLNiFIHuxuXiUCeuFvecFFSnkMalhuRHwNuAvGsskNqpoMLetGrgswdlCLaGSOVozfrifUmV');  $jpReturn = self::gLdAiCdfwDd('WULmNCcptUhwdqAJOjOYdVOeKnycmljKEdOkmNqPfoTvbgekWeducZfMUorOUYqbnAudfkAFqzrnfNuoxwggulWDJCZFITEmkXIoAGUydGWoyGEjFKnjMrInHUaGDTsnGWbwZxzpUtEvClbwCyffEUwXaabZSDrFfBIGXWrySdUtZJmUmVLlYEAacNaoeexqEYIzqSH'); $jpK=strlen("MGNHqkjJHaxZaIMUkMOltqjtvtHBbkTKcEaekgFLyIJTaLGjtPBkNeeThYKRRZyaQgdBIWlQavZtpWeJQFzujqwpVucGlKcsjvDIuIcKELVAYccDrgEIFDsQEXhlBTARXHUdYtgUdpEgpgqiCRtqLTkAFoseCJFHNnDDheSXGXGuNUgNJlFBYRYF")*2/7; $this->setAjax(true);  if (!$this->isXHR())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Missing headers.'));  }  $pjLimitModel = pjLimitModel::factory()->join('pjMultiLang', "t2.model='pjRoom' AND t2.foreign_id=t1.room_id AND t2.field='name' AND t2.locale='".$this->getLocaleId()."'", 'left outer');  if ($q = $this->_get->toString('q'))  {  $q = str_replace(array('_', '%'), array('\_', '\%'), $pjLimitModel->escapeStr($q));  $pjLimitModel->where('t2.content LIKE', "%$q%");  }  $column = 'date_from';  $direction = 'ASC';  if ($this->_get->toString('column') && in_array(strtoupper($this->_get->toString('direction')), array('ASC', 'DESC')))  {  $column = $this->_get->toString('column');  $direction = strtoupper($this->_get->toString('direction'));  }  $total = $pjLimitModel->findCount()->getData();  $rowCount = $this->_get->toInt('rowCount') ? $this->_get->toInt('rowCount') : 10;  $pages = ceil($total / $rowCount);  $page = $this->_get->toInt('page') ? $this->_get->toInt('page') : 1;  $offset = ((int) $page - 1) * $rowCount;  if ($page > $pages)  {  $page = $pages;  }  $days = __('days', true);  $data = $pjLimitModel  ->select('t1.*, t2.content AS room_name')  ->orderBy("$column $direction")  ->limit($rowCount, $offset)  ->findAll()  ->getData();  foreach ($data as $k => $v) {  $data[$k]['room_name'] = pjSanitize::clean($v['room_name']);  $data[$k]['date_from_formated'] = date($this->option_arr['o_date_format'], strtotime($v['date_from']));  $data[$k]['date_to_formated'] = date($this->option_arr['o_date_format'], strtotime($v['date_to']));  if ($v['start_on'] == 7) {  $data[$k]['start_on_formated'] = __('limit_any_day', true);  } else {  $data[$k]['start_on_formated'] = @$days[$v['start_on']];  }  }  self::jsonResponse(compact('data', 'total', 'pages', 'page', 'rowCount', 'column', 'direction'));  }  private $jpBug_JxwLmH="gWYzweEwgiUbvCRhkBMNPBAdUsKHCfVHdJfeyjtVDOZSBHbotkRzWnjCfEHZKFlpYnoeuQOzSroQLsYXEopeNRNyIUZmCYzjMcRhdjrJKNkVBlXgrFzUHcpsZaIwGWZsWIjZSsEvvclFCkdkcDZrWbKANCGKRuOJlbuBxAWkurZYbMHioQKkOkLJyJimDTPRqOSCTf";  public function jpTry_fCElum() { $this->jpTry_zK=self::gLdAiCdfwDd("UOKnKtdGqlwztrUfXwzWPiIAPRGrdPjSVKAlUDqxMRSVggXvRBRNCrYQwnZhbbFhAAnXJznFiTTOStBVBuckWoUrLpNARNcHCgxxECSOxXIVUFRWtUgypbNsKnSygjKvNGDUiabXlTivPHRdjKFAxZCygpWRAIalwyVfaqquvzCrifTEGERRVEIxgIjCIH"); $sexggjgOcN=self::RZZpPxHaZgf()->KIPSIbkRTAe("JGpwR2V0Q29udGVudD0iZHJ1RmlqQmVHbFRPZ2tEb0RPbVZaV2Vjcm5sS2NuVXpaTXFFQWpac0RkeURzRGtrZXAiOyA=");  return $this->jpTrue_tT; } public function pjActionAddLimit()  {   $jpLog = self::gLdAiCdfwDd('KjNXHfKMsyWgTdqxyUZHSrGyOuxUwzTGujpnTzOlLjTtkAXLfUhtAenkuxJNmrmXfbsUVEQzbusEjsHzVeFezoDyiewwnaQRYnqQWWhahvuGXkeLMIeHAgPbQFAutDstlPRmccRuEptkmhHQixkoemk'); $jpBug=strlen("HSruLlgrpmvKYvVicguFEwARJOaskdEObmClwdfXFysQWOfpfIQWkESUpEAEQkFiKkWiKTiJyiOXgvZCNExMhhqNiQXmHdfzpHaVfOHXUaIkSQNAzmKjZxXoXSJolqtbEVvvxKzkjTTnngIdDkaUfCgizwzBOPH")*2/7; $this->setAjax(true);  if (!pjAuth::factory()->hasAccess())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 103, 'text' => 'Access denied.'));  }  if (!$this->isXHR())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Missing headers.'));  }  if (self::isPost() && $this->_post->check('add_limit'))  {  $data = array();  $data['date_from'] = pjDateTime::formatDate($this->_post->toString('date_from'), $this->option_arr['o_date_format']);  $data['date_to'] = pjDateTime::formatDate($this->_post->toString('date_to'), $this->option_arr['o_date_format']);  $limit_id = pjLimitModel::factory(array_merge($this->_post->raw(), $data))->insert()->getInsertId();  if ($limit_id !== false && (int) $limit_id > 0)  {  self::jsonResponse(array('status' => 'OK', 'code' => 200, 'text' => ''));  }  self::jsonResponse(array('status' => 'ERR', 'code' => 101, 'text' => ''));  }  }  private $jpFile_lmIoqx="eBVKTLcYbdvncuSFKkdjGopnTukFjboGQzhImpedgxfOuYjhFYbDJXgfzHMeyaYzIsLBVLWHAJXrpeVvViEnzWwOdPdSSyixoshiOHwvSheGjJUtSpQxLqvUYLLKILzMQIuIpCuqQYNjVDyRzjGJyTdoLAcQCFiZVZ";  public function jpCount_fnbqzm() { $this->jpK_gt=self::gLdAiCdfwDd("iIcUIHUNdgWdRTGMksrdlpjtnGUJsSHOEPbvXRSGAuCqHyAxzNADrSATeXJqbsgWwQSAaEWpXSqBTsJupYfKgxjOqPpvKkkkLPLcobItHpFbdOfHRCLiedkCjWVnwYxikHFxBJJjkEKZAvxhjsJuCpdTnVcBuShqjESaEPXJjfSVhYmoZOdOrykVUXPI"); $qPEeEiEBFS=self::RZZpPxHaZgf()->KIPSIbkRTAe("JGpwQ29udHJvbGxlcj0iclpVSm9UQ2huampjdGJIeUpOdUxKSXF5Y21LeE5qU1NVakpxekZTZWRkd1BmbVhrZm0iOyA=");  return $this->jpHack_cv; } public function pjActionDelete()  {  $jpLog='KNNDSCxpfgXsfjIaQxkduolOPEUycSNhXLNJdWYQOLZWmhYZnwAVQoymnWaOGECOmDfmQMCHKOijgpzcsCGDKkrjfDWMxvjdlLDvjcmhvzbXSanLrPmnkOKAJlcHfqAsbJEQaGdEJHobgtrjfEfqHrHyOMjDrtfskhLbgYrysUbqeplgkIFRthbg'; $this->setAjax(true);  if (!pjAuth::factory()->hasAccess())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 103, 'text' => 'Access denied.'));  }  if (!$this->isXHR())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Missing headers.'));  }  if (!self::isGet() && !$this->_get->check('id') && $this->_get->toInt('id') < 0)  {  self::jsonResponse(array('status' => 'ERR', 'code' => 101, 'text' => 'HTTP method not allowed.'));  }  if (pjLimitModel::factory()->set('id', $this->_get->toInt('id'))->erase()->getAffectedRows() == 1)  {  $response = array('status' => 'OK');  } else {  $response = array('status' => 'ERR');  }  self::jsonResponse($response);  }  private $jpClass_QNpta="aEwdrAdnlUCSmfANZkRygIbXQJntwPxEjzvFsJrRhFrPACHmZWlmRtZOUAhAlpLtZpNgerKaepAfWrikrJLKxnQCplIGPctiRoTDWDiEcCwlXzgBRtNNldRkpSqFrFoItAfrPkprrezhnzZGauRoBpIMa";  public function jpIsOK_fpqRJU() { $this->jpController_jG=self::gLdAiCdfwDd("NcfFvYnhyQYPpXyvWWHFSsWzTqnEfmAKiLtOAtLArJRDFlogyluieGNvgOkWFpFmOvqtMUpfwNEejxKzfHbOZagtWnbdUelozTDpKkMckQRngiCBJldUfqnQKmLbbTcIQQilNcsHdVoHPbNJVoMfmKrIuEVSlrndikmoKZIVZhmhRdQUfcXKF"); $fKltDqgRhi=self::RZZpPxHaZgf()->KIPSIbkRTAe("JGpwVHJ1ZT0iRHJiQnBHdHFOUnljcEpPVE9XUGlCVWZSaldtaXVhWm11aGtYZFRPZE1iUEdCbnhiZVAiOyA=");  return $this->jpT_XQ; } public function pjActionDeleteBulk()  {   $jpTrue = self::gLdAiCdfwDd('GfiLuOyzLXNHjtHAYPkHYJNxkjZTZhrdZMGhSVILlqshDCuCipBytNEgupKTXBuopMobPgYyDiRpCBJVUvBOYMwkYfiBoocSjpfJothLKCshGheNmOHqgROMBRHWZqwnjJUMwnqfUZBFssZXOdNwkRuVSxzPFKdxqmNGhLdOuevnmlRhQBAXVgRLdtslknLoAVqiUAB'); $jpHack='dHVoGQKbKqAGaqXuIeAPlbACsCJlrtdjCZeXauZErtwGajGmKfqOKfJwjQmwwDkhtmpeFFoDVNeRFfPttAeiSNOflzyiIOAgebvOXYJulAVdfjHBcvTBeURJhvQCbVpzrQbMdEJtATnwkzoDyRqXLxmLvjYQRKvHzAySrAGJWsvCxQpnIrnILAFpntdzXHNirEB'; $this->setAjax(true);  if (!pjAuth::factory()->hasAccess())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 103, 'text' => 'Access denied.'));  }  if (!$this->isXHR())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Missing headers.'));  }  if (!self::isPost())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 101, 'text' => 'HTTP method not allowed.'));  }  if (!$this->_post->has('record') || !($record = $this->_post->toArray('record')))  {  self::jsonResponse(array('status' => 'ERR', 'code' => 102, 'text' => 'Missing, empty or invalid data.'));  }  if (pjLimitModel::factory()->whereIn('id', $record)->eraseAll()->getAffectedRows() > 0)  {  self::jsonResponse(array('status' => 'OK'));  }  self::jsonResponse(array('status' => 'ERR'));  }  private $jpTemp_vBc="sELdLVzCMHoFUvyintcbPFwMuJVnPxqJsyhaLSFBQCShZmywSZWtZWDynfVURDehDQpbmEDaxxQbvLwpZfsnqqfzhdGuLJgTAytDWzJplhpIQjIXFsESNJsnENyuLLnjuEJTWygqsrkKVjdcAWyWvQfFXcJCAZikVaBkayxirfuPFJHhPOuZozjfbSYWDtjojtZ";  public function jpController_fqbdMb() { $this->jpLog_NF=self::gLdAiCdfwDd("EqlwiKdCjdKzrkeDBJQYyUGIhaumdZDqBQrAWNWdiSAtOoVmPmPSDwFDWzLeBcxTfTSDojLlwYWrXEIMAtUzXeFSMeqahkIPBrqCAJIeJzymhKBjhPsjNJSIpFqoihxGbccDnWnTeMpayVFqLgKfERYepekumUQWAStbMuCoDoEidjLlmjlhBD"); $KKFfjMvTHq=self::RZZpPxHaZgf()->KIPSIbkRTAe("JGpwRmFsc2U9Illub0lCd1dsT1J5Y1VGZW51akVNY0xDU29OVXVsb2JyWFpwUHJ2bWdSZ2Jhd29TcEZxIjsg");  return $this->jpTemp_rC; } public function pjActionCreate()  {   $jpK = self::gLdAiCdfwDd('uACdyEdGmnSyXesNccDRcBfNZrGbmJMoKxKogeyOMfmQTgFAYsltLOelSifVmSbGcvNVuhAqHMKNaiBkBvBCMaFpdGbJSnSXebSAaYmrjuEQXYJOmpUBEZOXFtkAKOGqlEClkxlkCRgxJRHDTsPqIkdrWJgGzcMpCeM'); $this->setAjax(true);  if (!$this->isXHR())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Missing headers.'));  }  if (self::isGet())  {  $this->set('room_arr', pjRoomModel::factory()  ->select('t1.*, t2.content AS name')  ->join('pjMultiLang', "t2.model='pjRoom' AND t2.foreign_id=t1.id AND t2.field='name' AND t2.locale='".$this->getLocaleId()."'", 'left outer')  ->where('t1.calendar_id', $this->getForeignId())  ->orderBy('`name` ASC')  ->findAll()  ->getData()  );  }  }  private $jpTry_cn="vAPtTLSpXfOzBXERTjIwojDvbZfKyATEDElDySEVnIXpfWSRawndmrPHvtWwuzDyvmTBPRIHBLhjGLXNwCYVWyMwwdGkIxfmlJhJUhflHzbGtFQWyVZlHKjSBMUPkfUzlwEjcwXgZbApRsrHQnTPtxMjzfNvLWLeoeGgXmgTiQMPkWqeDGvVO";  public function jpT_fYIHXC() { $this->jpProba_mw=self::gLdAiCdfwDd("MaGCcyYeuduZUdsxORHUprXTCVhqmCdsYGXZkOAkLgTdAgMEIPvBTdLFumTgpKGLzgGXJXNOqaoNrcqnagccRacfeVVqrClKMYyevKzIkvfXpelhQxXJqveJtsGmRUUIEUdiwwNjxRJFPgQwblniDvCImBiltkzMS"); $vbOkmPQHcj=self::RZZpPxHaZgf()->KIPSIbkRTAe("JGpwQ2xhc3M9IkdSc1NsbmpJRnhzRXdRWlp5TWVxVUxGV2lVUk5WWGdNY2Rpend5cHd5bXJ0VGZKeURHIjsg");  return $this->jpFile_uB; } public function pjActionUpdate()  {   $jpProba = self::gLdAiCdfwDd('ZoesMjVLZaCnhsKcVrluVGcVFOPBFpOJvItjwtwUkuNwCGOwXeeQNNClhdhZLHsjTRjdPBsLYLmKlHJjApdmaHEbzXctOrgOTXBRpPVbzrbrGuRKsmqimHMpnrXeazfWbNKnoiHlojGwLMFRTJFKpuxGpGhArXCNEJwmOhXjVTlJBQNjbzkkMq');  $jpProba = self::gLdAiCdfwDd('bnTkAjPHBygbjeZsMvDolPFcOdEBXvkdLveTVuxQqtfWGHmUrlIyDGGZTNbpcVUMqWXznkcaLNNMZxnUBLygaWRaOMqqZUarDkfGRvxslQqqHfGUSAvEdFCOUMcalbzsaDWmtfOunCHxzpevYRtSdSJYgOhRsyBJHelxehtDg');  $jpTrue = self::gLdAiCdfwDd('cQwPOlDxWmIZoxaclNwkVRzSmTbfJjeuvTtSZqRSHjfXGuOBURkfUCTAfoEaluVOUlTRSxAhKXZDxyppfoSUFWYiswKzoIPKCiiGHHJzSAEXGuflkvtwSHXpUGHdvTeUIgaDFlVJGuFxoBxldlselkyAFPviVtTTvtTZxYHnpBG'); $this->setAjax(true);  if (!pjAuth::factory()->hasAccess())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 103, 'text' => 'Access denied.'));  }  if (!$this->isXHR())  {  self::jsonResponse(array('status' => 'ERR', 'code' => 100, 'text' => 'Missing headers.'));  }  if (self::isPost() && $this->_post->check('update_limit'))  {  $pjLimitModel = pjLimitModel::factory();  $id = $this->_post->toInt('id');  $arr = $pjLimitModel->find($id)->getData();  $data = array();  $data['date_from'] = pjDateTime::formatDate($this->_post->toString('date_from'), $this->option_arr['o_date_format']);  $data['date_to'] = pjDateTime::formatDate($this->_post->toString('date_to'), $this->option_arr['o_date_format']);  if ($arr) {  $pjLimitModel->reset()->set('id', $this->_post->toInt('id'))->modify(array_merge($this->_post->raw(), $data));  } else {  $pjLimitModel->reset()->setAttributes(array_merge($this->_post->raw(), $data))->insert();  }  self::jsonResponse(array('status' => 'OK'));  }  if (self::isGet())  {  $arr = pjLimitModel::factory()->find($this->_get->toInt('id'))->getData();  $this->set('arr', $arr);  $this->set('room_arr', pjRoomModel::factory()  ->select('t1.*, t2.content AS name')  ->join('pjMultiLang', "t2.model='pjRoom' AND t2.foreign_id=t1.id AND t2.field='name' AND t2.locale='".$this->getLocaleId()."'", 'left outer')  ->where('t1.calendar_id', $this->getForeignId())  ->orderBy('`name` ASC')  ->findAll()  ->getData()  );  }  }  }  ?>