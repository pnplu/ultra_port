<?php

namespace Ultraline;

Class Database {

  public function db_application_user($id_student) {

    $paht_ios = "data/db_application_ios.json";
    $paht_android = "data/db_application_android.json";
    $paht_web = "data/db_application_web.json";
    $paht_interactive = "data/db_application_interactive.json";

    $data_ios = file_get_contents($paht_ios);
    $data_android = file_get_contents($paht_android);
    $data_web = file_get_contents($paht_web);
    $data_interactive = file_get_contents($paht_interactive);
    $ios_json = json_decode($data_ios, TRUE);
    $android_json = json_decode($data_android, TRUE);
    $web_json = json_decode($data_web, TRUE);
    $interactive_json = json_decode($data_interactive, TRUE);

    $data_m = $ios_json + $android_json + $web_json + $interactive_json;

    // var_dump($web_json);
    // var_dump($android_json);
    $data_in_json_ios = $data_m[$id_student];
    //parameter data student id
    $student_id = $data_in_json_ios["student_id"];
    //parameter data user
    $student_id = $data_in_json_ios["student_id"];
    $user_name = $data_in_json_ios["user"]["name"];
    $user_quote = $data_in_json_ios["user"]["motivation_quote"];
    $user_facebook = $data_in_json_ios["user"]["facebook"];
    $user_email = $data_in_json_ios["user"]["email"];
    $user_img_lannding = $data_in_json_ios["user"]["image"]["landing_profile"];
    $user_img_avatar = $data_in_json_ios["user"]["image"]["profile"];
    $user_img_quote = $data_in_json_ios["user"]["image"]["quote"];
    $user_img_head = $data_in_json_ios["user"]["image"]["head_preview"];
    $user_video_showreel = $data_in_json_ios["user"]["video"]["showreel"];
    $user_video_interview = $data_in_json_ios["user"]["video"]["interview"];
    //parameter data work
    $work_name = $data_in_json_ios["work"]["name"];
    $project_name = $data_in_json_ios["work"]["project_name"];
    $work_type = $data_in_json_ios["work"]["type"];
    $work_concept = $data_in_json_ios["work"]["concept"];
    $work_fn_name_a = $data_in_json_ios["work"]["function"]["function_name_a"];
    $work_fn_name_b = $data_in_json_ios["work"]["function"]["function_name_b"];
    $work_fn_name_c = $data_in_json_ios["work"]["function"]["function_name_c"];
    $work_fn_disc_a = $data_in_json_ios["work"]["function"]["discription"]["fuction_dis_a"];
    $work_fn_disc_b = $data_in_json_ios["work"]["function"]["discription"]["fuction_dis_b"];
    $work_fn_disc_c = $data_in_json_ios["work"]["function"]["discription"]["fuction_dis_c"];
    $work_fn_img_a = $data_in_json_ios["work"]["function"]["image"]["function_img_a"];
    $work_fn_img_b = $data_in_json_ios["work"]["function"]["image"]["function_img_b"];
    $work_fn_img_c = $data_in_json_ios["work"]["function"]["image"]["function_img_c"];
    $work_design_process_a = $data_in_json_ios["work"]["design_process"]["img_a"];
    $work_design_process_b = $data_in_json_ios["work"]["design_process"]["img_b"];
    $work_design_process_c = $data_in_json_ios["work"]["design_process"]["img_c"];
    $work_design_process_d = $data_in_json_ios["work"]["design_process"]["img_d"];
    //parameter data tools skills
    $skill_name_a = $data_in_json_ios["skill"]["skill_a_name"];
    $skill_name_b = $data_in_json_ios["skill"]["skill_b_name"];
    $skill_name_c = $data_in_json_ios["skill"]["skill_c_name"];
    $skill_name_d = $data_in_json_ios["skill"]["skill_d_name"];
    $skill_perc_a = $data_in_json_ios["skill"]["percent"]["skill_a_percent"];
    $skill_perc_b = $data_in_json_ios["skill"]["percent"]["skill_b_percent"];
    $skill_perc_c = $data_in_json_ios["skill"]["percent"]["skill_c_percent"];
    $skill_perc_d = $data_in_json_ios["skill"]["percent"]["skill_d_percent"];

    //in array
    $array_user = array('student_id' => $student_id,
                            'user_name' => $user_name,
                            'user_quote' => $user_quote,
                            'user_facebook' => $user_facebook,
                            'user_email' => $user_email,
                            'user_img_lannding' => $user_img_lannding,
                            'user_img_avatar' => $user_img_avatar,
                            'user_img_quote' => $user_img_quote,
                            'user_img_head' => $user_img_head,
                            'user_video_showreel' => $user_video_showreel,
                            'user_video_interview' => $user_video_interview,
                            'work_name' => $work_name,
                            'project_name' => $project_name,
                            'work_type' => $work_type,
                            'work_concept' => $work_concept,
                            'work_fn_name_a' => $work_fn_name_a,
                            'work_fn_name_b' => $work_fn_name_b,
                            'work_fn_name_c' => $work_fn_name_c,
                            'work_fn_disc_a' => $work_fn_disc_a,
                            'work_fn_disc_b' => $work_fn_disc_b,
                            'work_fn_disc_c' => $work_fn_disc_c,
                            'work_fn_img_a' => $work_fn_img_a,
                            'work_fn_img_b' => $work_fn_img_b,
                            'work_fn_img_c' => $work_fn_img_c,
                            'work_design_process_a' => $work_design_process_a,
                            'work_design_process_b' => $work_design_process_b,
                            'work_design_process_c' => $work_design_process_c,
                            'work_design_process_d' => $work_design_process_d,
                            'skill_name_a' => $skill_name_a,
                            'skill_name_b' => $skill_name_b,
                            'skill_name_c' => $skill_name_c,
                            'skill_name_d' => $skill_name_d,
                            'skill_perc_a' => $skill_perc_a,
                            'skill_perc_b' => $skill_perc_b,
                            'skill_perc_c' => $skill_perc_c,
                            'skill_perc_d' => $skill_perc_d
                          );
    //
    return $array_user;
    }

    public function db_application_catagory($id_catagoey) {

      if($id_catagoey === "1") {
        $paht_ios = "data/db_application_ios.json";
        $con_json = file_get_contents($paht_ios);
        $json_data = json_decode($con_json, TRUE);
      }
      if($id_catagoey === "2") {
        $paht_android = "data/db_application_android.json";
        $con_json = file_get_contents($paht_android);
        $json_data = json_decode($con_json, TRUE);
      }
      if($id_catagoey === "3") {
        $paht_web = "data/db_application_web.json";
        $con_json = file_get_contents($paht_web);
        $json_data = json_decode($con_json, TRUE);
      }
      if($id_catagoey === "4") {
        $paht_interactive = "data/db_application_interactive.json";
        $con_json = file_get_contents($paht_interactive);
        $json_data = json_decode($con_json, TRUE);
      }

      return $json_data;
    }
  }

 ?>
