<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Usma_calculator extends CI_Controller {

  public function index()
  {
    // Do stuff
    //echo 'testestest!';
    $this->load->model('calculator_model');
    //print("<pre>" . print_r($this->calculator_model->slides,true) . "</pre>");
    $data['calc_data'] = $this->calculator_model->slides;
    $this->load->view('calcview', $data);
  }

  public function pdf_test_a()
  {
    //$this->load->view('report_view_dummy');
    $data['field_values'] = json_decode('{"slides":{"servers":{"handle":"servers","title":"Servers","position":0,"sum_raw":1,"sum_calc":1,"add_to_total":1,"add_to_eps_total":1,"fields":{"domain_controller":{"handle":"domain_controller","title":"Domain Controller / LDAP - AD","global":0,"position":0,"raw":1,"weight":6,"calc":2},"mx_servers":{"handle":"mx_servers","title":"Email Server / Exchange Server","global":0,"position":1,"raw":0,"weight":8,"calc":0},"file_servers":{"handle":"file_servers","title":"File Server","global":0,"position":2,"raw":0,"weight":8,"calc":0},"application_servers":{"handle":"application_servers","title":"Application Server","global":0,"position":3,"raw":0,"weight":8,"calc":0},"db_servers":{"handle":"db_servers","title":"Database Server / MSSQL - MySQL - Oracle","global":0,"position":4,"raw":0,"weight":6,"calc":0},"web_servers":{"handle":"web_servers","title":"Web Server / IIS - Apache","global":0,"position":5,"raw":0,"weight":8,"calc":0},"endpoint_protection":{"handle":"endpoint_protection","title":"Endpoint Protection Server","global":0,"position":6,"raw":0,"weight":25,"calc":0},"mail_archiver":{"handle":"mail_archiver","title":"Mail Archiver","global":0,"position":7,"raw":0,"weight":8,"calc":0}},"total":1,"total_eps":2},"network_devices":{"handle":"network_devices","title":"Network Devices","position":1,"sum_raw":1,"sum_calc":1,"add_to_total":1,"add_to_eps_total":1,"fields":{"firewalls":{"handle":"firewalls","title":"Network Firewalls","global":0,"position":0,"raw":1,"weight":8,"calc":4},"nips_nids":{"handle":"nips_nids","title":"Network IPS / IDS","global":0,"position":1,"raw":0,"weight":4,"calc":0},"vpns":{"handle":"vpns","title":"Network VPN","global":0,"position":2,"raw":0,"weight":4,"calc":0},"antispam":{"handle":"antispam","title":"Network AntiSpam / Proxy","global":0,"position":3,"raw":0,"weight":8,"calc":0},"access_control":{"handle":"access_control","title":"Network Access Control","global":0,"position":4,"raw":0,"weight":8,"calc":0},"switches":{"handle":"switches","title":"Network Switches","global":0,"position":5,"raw":0,"weight":25,"calc":0},"routers":{"handle":"routers","title":"Network Routers","global":0,"position":6,"raw":0,"weight":25,"calc":0},"load_balancers":{"handle":"load_balancers","title":"Network Load Balancers","global":0,"position":7,"raw":0,"weight":25,"calc":0},"web_filters":{"handle":"web_filters","title":"Network Web Filters","global":0,"position":8,"raw":0,"weight":8,"calc":0},"nas":{"handle":"nas","title":"NAS - Storage","global":0,"position":9,"raw":0,"weight":25,"calc":0}},"total":1,"total_eps":4},"devices":{"handle":"devices","title":"Networked Machines","position":2,"sum_raw":1,"sum_calc":0,"add_to_total":1,"add_to_eps_total":0,"fields":{"workstations":{"handle":"workstations","title":"Workstations / Laptop - Desktops","global":0,"position":0,"raw":1,"calc":1},"other_networked_machines":{"handle":"other_networked_machines","title":"Other Network Devices","global":0,"position":1,"raw":0,"calc":0}},"total":1,"total_eps":0},"users":{"handle":"users","title":"User Information","position":3,"sum_raw":1,"sum_calc":0,"add_to_total":0,"add_to_eps_total":0,"fields":{"domain_users":{"handle":"domain_users","title":"Domain Users","global":0,"position":0,"raw":1,"calc":1},"external_users":{"handle":"external_users","title":"External Users / VPN","global":1,"position":1,"raw":0,"calc":0},"non_dom_users":{"handle":"non_dom_users","title":"Non-Domain Users / Guests","global":1,"position":2,"raw":0,"calc":0}},"total":1,"total_eps":0},"network_data":{"handle":"network_data","title":"Network Information","position":4,"sum_raw":0,"sum_calc":0,"add_to_total":0,"add_to_eps_total":0,"fields":{"locations":{"handle":"locations","title":"Total Locations with Direct Internet Access","global":0,"position":0,"raw":1,"calc":1},"bandwidth":{"handle":"bandwidth","title":"Bandwidth in MBPS","global":0,"position":1,"raw":0,"calc":0},"small_branches":{"handle":"small_branches","title":"Subset of above that are small branch offices","global":0,"position":2,"raw":0,"calc":0}},"total":0,"total_eps":0},"misc":{"handle":"misc","title":"Miscellaneous","position":5,"sum_raw":0,"sum_calc":0,"add_to_total":0,"add_to_eps_total":0,"fields":{"compression_ratio":{"handle":"compression_ratio","title":"Compression Ratio (n:1)","global":0,"position":0,"raw":5,"calc":5},"avg_msg_size":{"handle":"avg_msg_size","title":"Average Message Size (in KB)","global":0,"position":1,"raw":800,"calc":800},"standard_loggers":{"handle":"standard_loggers","title":"Standard Loggers","global":0,"position":2,"raw":1,"calc":1},"other_eps":{"handle":"other_eps","title":"Other EPS","global":0,"position":3,"raw":0,"calc":0},"virtual_or_physical":{"handle":"virtual_or_physical","title":"Virtual or Physical Appliance(s)","global":0,"position":4,"raw":"Virtual","calc":"Virtual"},"usage_pattern":{"handle":"usage_pattern","title":"Usage Pattern","global":0,"position":5,"raw":"24x7 (Always Up)","calc":"24x7 (Always Up)"}},"total":0,"total_eps":0}},"grand_totals":{"devices":3,"eps":6},"eps_vals":{"per_second":{"events":6,"raw":4800,"uncompressed":"4.69 MB","compressed":"0.94 MB"},"per_hour":{"events":21600,"raw":17280000,"uncompressed":"16875 MB","compressed":"3375 MB"},"per_day":{"events":518400,"raw":414720000,"uncompressed":"395.51 GB","compressed":"79.1 GB"},"per_month":{"events":15552000,"raw":12441600000,"uncompressed":"11.59 TB","compressed":"2.32 TB"},"per_year":{"events":189216000,"raw":151372800000,"uncompressed":"140.98 TB","compressed":"28.2 TB"}},"recommendations":{"line_1":" - USM AIO 75 ASSET LICENSE","line_2":" - NO ADDITIONAL SENSORS NEEDED"}}');
    //$data['calc_totals'] = json_decode('{"total_servers":1,"total_servers_eps":2,"total_network_devices":1,"total_network_devices_eps":4,"total_devices":1,"total_users":1,"grand_total_devices":3,"grand_total_devices_eps":6}');
    $this->load->view('reportview',$data);
    //$this->load->library('pdf');
    //$this->pdf->load_view( 'reportview', $data );
    //$this->pdf->render();
    //$this->pdf->stream("test.pdf");
  }

  public function pdf_test_b()
  {
    //$data['field_values'] = json_decode($this->input->post('field_values'));
    //$data['calc_totals'] = json_decode($this->input->post('calc_totals'));
    $data['field_values'] = json_decode($this->input->get('field_values'));
    $data['calc_totals'] = json_decode($this->input->get('calc_totals'));
    $processed_pdf = $this->load->view('reportview', $data, TRUE);
    $dompdf = new Dompdf\Dompdf();
    $dompdf->loadHtml($processed_pdf);
    $dompdf->render();
    //$pdf = $dompdf->output();
    $dompdf->stream();
    /*$encoded_pdf = base64_encode($pdf);
    echo '<object data="data:application/pdf;base64,' . $encoded_pdf . '" type="application/pdf" width="100%" height="100%">alt : <a href="data:application/pdf;base64,' . $encoded_pdf . '">scope_result.pdf</a></object>';*/
    //echo '<pre>';
    //print_r(json_decode($data['for_pdf']['field_values']));
    //print_r($data);
    //print_r($processed_pdf);
    //echo '</pre>';
    /*echo '<pre>';
    print_r( $field_values );
    echo '</pre>';
    echo '<pre>';
    print_r( $calc_totals );
    echo '</pre>';*/
    //https://downloads.sourceforge.net/project/tcpdf/tcpdf_6_2_13.zip
  }
  public function pdf_test_c()
  {
    $this->load->library('Pdf');
    $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
    $data['field_values'] = json_decode($this->input->post('field_values'));
    $data['calc_totals'] = json_decode($this->input->post('calc_totals'));
    $processed_pdf = $this->load->view('reportview', $data, TRUE);
    $pdf->SetTitle('Scoping Report');
    $pdf->SetHeaderMargin(30);
    $pdf->SetTopMargin(20);
    $pdf->setFooterMargin(20);
    $pdf->SetAutoPageBreak(true);
    $pdf->SetAuthor('AlienVault');
    $pdf->SetDisplayMode('real', 'default');
    $pdf->SetFont('helvetica', '', 9);
    $pdf->AddPage();
    $pdf->Write(5, 'CodeIgniter TCPDF Integration');
    //$obj_pdf->writeHTML($processed_pdf, true, false, true, false, '');
    //$pdf->Output('pdfexample.pdf', 'I');
    $pdf->Output('pdfexample.pdf', 'D');
    //$encoded_pdf = $pdf->Output('pdfexample.pdf', 'E');
    //echo '<object data="data:application/pdf;base64,' . $encoded_pdf . '" type="application/pdf" width="100%" height="100%">alt : <a href="data:application/pdf;base64,' . $encoded_pdf . '">scope_result.pdf</a></object>';
  }
  public function file_system_test() {
    $this->load->helper('file');
    $controllers = get_filenames(APPPATH.'controllers/');
    $assets = get_filenames('assets/');
    $assets_2 = get_dir_file_info('assets/');
    //print_r($controllers);
    //echo APPPATH.'controllers/';
    echo '<pre>';
    print_r($assets_2);
    echo '</pre>';
  }
}
