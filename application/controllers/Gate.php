<?php


class Gate extends CI_Controller {


      function view()
		{
			$data['title'] = 'Hut GUI';

              $this->load->view('templates/header', $data);
              $this->load->view('gate/authenticate', $data);
              $this->load->view('templates/footer');

		
		}

        function authenticate()
        {
        		$this->load->database();

			        	//$this->load->database('default');
			        
			        // $data['military_id']=$this->input->post('id');
			          $data['type']= $this->input->post('type');
			           $data['bdate']= $this->input->post('bdate');
			           $data['password']= $this->input->post('secret_password');
			           $data['nick_name']= $this->input->post('nick_name');

			          // echo $this->input->post('type');

			           if($data['type']=='military_commander')
			           {
			           	 $data['id']=$this->input->post('mid');
			           }
			           else if($data['type']=='public_servant')
			           	{
			           		 $data['id']=$this->input->post('gid');
			           	}
			           	else if($data['type']=='storage_person')
			           	{
			           		 $data['id']=$this->input->post('cid');
			           	}
			           	else if($data['type']=='hut_person')
			           	{
			           		 $data['id']=$this->input->post('gid');
			           	}
			           	else
			           	{
			           		 $data['id']=$this->input->post('cid');
			           	}


			    $parameter1=$data['id'];

			    $parameter5=$data['type'];
			    $parameter2=$data['bdate']; 
			    $parameter3=$data['password'];
			    $parameter4=$data['nick_name']; 


			   // print_r($data);


			    
			    $serverName = "HP,1433";
			    $connectionInfo = array( "Database"=>"ad", "UID"=>"sa", "PWD"=>"mynameisanu");
			    $conn = sqlsrv_connect( $serverName, $connectionInfo);
			    if( $conn === false ) {
			         die( print_r( sqlsrv_errors(), true));
			    }
			    /* Define the Transact-SQL query. Use question marks  in place of
			     the parameters to be passed to the stored procedure */
			    $tsql_callSP = "{call authenticate_officials(?, ?, ?, ?, ?, ?)}";
			    /*
			     * Define the parameter array. Put all parameter in the order they appear in the SP.
			     * The second argument is needed to say if the parameter is an INPUT or an OUTPUT 
			     */
			    // This must be set as Integer, cause the initial type for the OUTPUT
			    $output_parameter =10;
			    $params = array( 
			                  array($parameter1, SQLSRV_PARAM_IN),
			                  array($parameter2, SQLSRV_PARAM_IN),
			                  array($parameter3, SQLSRV_PARAM_IN),
			                  array($parameter4, SQLSRV_PARAM_IN),
			                  array($parameter5, SQLSRV_PARAM_IN),
			                  array($output_parameter, SQLSRV_PARAM_OUT)
			               );
			    /* Execute the query. */
			    $stmt = sqlsrv_query( $conn, $tsql_callSP, $params);
			    if( $stmt === false )
			    {
			         echo "Error in executing statement.\n";
			         die( print_r( sqlsrv_errors(), true));
			    }

				sqlsrv_next_result($stmt);  
				//echo $output_parameter;
			
			     if($output_parameter==0)
			    {
			    	
			    	//not a user
     		$data['title'] = 'authenticate GUI';

              $this->load->view('templates/header', $data);
              $this->load->view('gate/authenticate', $data);
              $this->load->view('templates/footer');
			    }
			    else{

			    	$data['title'] = 'authenticate GUI';

              $this->load->view('templates/header', $data);
             // $this->load->view('gate/authenticate', $data);
              $this->load->view('templates/footer');

              echo "success";
			    }


			    /*Free the statement and connection resources. */
			    sqlsrv_free_stmt($stmt);

			   
			    

		}

		function assign_view()
		{
			$data['title'] = 'Assign GUI';

              $this->load->view('templates/header', $data);
              $this->load->view('gate/assign', $data);
              $this->load->view('templates/footer');

		}

		function assign()
		{
			$data['type']= $this->input->post('type');
			$data['id']= $this->input->post('id');


			    $parameter1=$data['id'];

			    $parameter2=$data['type'];



			    $serverName = "HP,1433";
			    $connectionInfo = array( "Database"=>"ad", "UID"=>"sa", "PWD"=>"mynameisanu");
			    $conn = sqlsrv_connect( $serverName, $connectionInfo);
			    if( $conn === false ) {
			         die( print_r( sqlsrv_errors(), true));
			    }
			    /* Define the Transact-SQL query. Use question marks  in place of
			     the parameters to be passed to the stored procedure */
			    $tsql_callSP = "{call assign_duty(?, ?, ?)}";
			    /*
			     * Define the parameter array. Put all parameter in the order they appear in the SP.
			     * The second argument is needed to say if the parameter is an INPUT or an OUTPUT 
			     */
			    // This must be set as Integer, cause the initial type for the OUTPUT
			    $output_parameter ='qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq';
			    $params = array( 
			                  array($parameter1, SQLSRV_PARAM_IN),
			                  array($parameter2, SQLSRV_PARAM_IN),
			                  array($output_parameter, SQLSRV_PARAM_OUT)
			               );
			    /* Execute the query. */
			    $stmt = sqlsrv_query( $conn, $tsql_callSP, $params);
			    if( $stmt === false )
			    {
			         echo "Error in executing statement.\n";
			         die( print_r( sqlsrv_errors(), true));
			    }

				sqlsrv_next_result($stmt);  
				//echo $output_parameter;
			
			     if($output_parameter=="assigned")
			    {
			    	
			    	//not a user
     		$data['title'] = 'authenticate GUI';

              $this->load->view('templates/header', $data);
             // $this->load->view('gate/authenticate', $data);
              $this->load->view('templates/footer');
              echo "assigned";


			    }
			    else if($output_parameter=="already assigned")
			    {

			    	$data['title'] = 'authenticate GUI';

              $this->load->view('templates/header', $data);
             // $this->load->view('gate/authenticate', $data);
              $this->load->view('templates/footer');
              

             echo "already assigned";
			  }
			  else{
			  	$data['title'] = 'authenticate GUI';

              $this->load->view('templates/header', $data);
             // $this->load->view('gate/authenticate', $data);
              $this->load->view('templates/footer');
              

             echo "assigned max";

			  }



			    /*Free the statement and connection resources. */
			    sqlsrv_free_stmt($stmt);

			

		}

		function escort()
		{
			//$query="select count(*) from escort where date=getDate() status=NULL";

			$this->load->database();

			$query = $this->db->query("select count(*) as cc from escort where status is null");

			foreach ($query->result() as $row)
			{
			        $data['count'] =$row->cc;
			       
			}



			$serverName = "HP,1433";
			    $connectionInfo = array( "Database"=>"ad", "UID"=>"sa", "PWD"=>"mynameisanu");
			    $conn = sqlsrv_connect( $serverName, $connectionInfo);
			    if( $conn === false ) {
			         die( print_r( sqlsrv_errors(), true));
			    }
			    /* Define the Transact-SQL query. Use question marks  in place of
			     the parameters to be passed to the stored procedure */
			    $tsql_callSP = "{call add_escortgroup(?)}";
			    /*
			     * Define the parameter array. Put all parameter in the order they appear in the SP.
			     * The second argument is needed to say if the parameter is an INPUT or an OUTPUT 
			     */
			    // This must be set as Integer, cause the initial type for the OUTPUT
			    $output_parameter ='qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq';
			    $params = array( 
			                  
			                  array($output_parameter, SQLSRV_PARAM_OUT)
			               );
			    /* Execute the query. */
			    $stmt = sqlsrv_query( $conn, $tsql_callSP, $params);
			    if( $stmt === false )
			    {
			         echo "Error in executing statement.\n";
			         die( print_r( sqlsrv_errors(), true));
			    }




				sqlsrv_next_result($stmt); 
				$data['status'] = $output_parameter; 







			$data['title'] = 'Hut GUI';

              $this->load->view('templates/header', $data);
              $this->load->view('gate/count', $data);
              $this->load->view('templates/footer');




			
					}
		

					function escort_proc()
					{



			$serverName = "HP,1433";
			    $connectionInfo = array( "Database"=>"ad", "UID"=>"sa", "PWD"=>"mynameisanu");
			    $conn = sqlsrv_connect( $serverName, $connectionInfo);
			    if( $conn === false ) {
			         die( print_r( sqlsrv_errors(), true));
			    }
			    /* Define the Transact-SQL query. Use question marks  in place of
			     the parameters to be passed to the stored procedure */
			    $tsql_callSP = "{call escort_civilian()}";
			    /*
			     * Define the parameter array. Put all parameter in the order they appear in the SP.
			     * The second argument is needed to say if the parameter is an INPUT or an OUTPUT 
			     */
			    // This must be set as Integer, cause the initial type for the OUTPUT
			    $output_parameter ='qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq';
			    $params = array( 
			                
			               );
			    /* Execute the query. */
			    $stmt = sqlsrv_query( $conn, $tsql_callSP, $params);
			    if( $stmt === false )
			    {
			         echo "Error in executing statement.\n";
			         die( print_r( sqlsrv_errors(), true));
			    }




				sqlsrv_next_result($stmt);

				//redirect($this->uri->uri_string());
				echo "ss";

				redirect("gate/escort");


    
					}

















		function auth()
		{
						$this->load->database();

			         $data['id']=$this->input->post('id');
			          $data['type']= 'military_commander';//$this->input->post('type');
			           $data['bdate']= '1992-07-25';//$this->input->post('bdate');
			           $data['password']= $this->input->post('secret_password');
			           $data['nick_name']= $this->input->post('nick_name');



			    $parameter1=$data['id']; 
			    $parameter5=$data['type'];
			    $parameter2=$data['bdate']; 
			    $parameter3=$data['password'];
			    $parameter4=$data['nick_name']; 


			    
			    $data['id']=$this->input->post('id');
			          $data['type']= 'military_commander';//$this->input->post('type');
			           $data['bdate']= '1992-07-25';//$this->input->post('bdate');
			           $data['password']= $this->input->post('secret_password');
			           $data['nick_name']= $this->input->post('nick_name');



			    $parameter1=$data['id']; 
			    $parameter5=$data['type'];
			    $parameter2=$data['bdate']; 
			    $parameter3=$data['password'];
			    $parameter4=$data['nick_name']; 


			    print_r($data);


			    
			    $serverName = "HP,1433";
			    $connectionInfo = array( "Database"=>"ad", "UID"=>"sa", "PWD"=>"mynameisanu");
			    $conn = sqlsrv_connect( $serverName, $connectionInfo);
			    if( $conn === false ) {
			         die( print_r( sqlsrv_errors(), true));
			    }
			    /* Define the Transact-SQL query. Use question marks  in place of
			     the parameters to be passed to the stored procedure */
			    $tsql_callSP = "{call authenticate_officials(?, ?, ?, ?, ?, ?)}";
			    /*
			     * Define the parameter array. Put all parameter in the order they appear in the SP.
			     * The second argument is needed to say if the parameter is an INPUT or an OUTPUT 
			     */
			    // This must be set as Integer, cause the initial type for the OUTPUT
			    $output_parameter =10;
			    $params = array( 
			                  array($parameter1, SQLSRV_PARAM_IN),
			                  array($parameter2, SQLSRV_PARAM_IN),
			                  array($parameter3, SQLSRV_PARAM_IN),
			                  array($parameter4, SQLSRV_PARAM_IN),
			                  array($parameter5, SQLSRV_PARAM_IN),
			                  array($output_parameter, SQLSRV_PARAM_OUT)
			               );
			    /* Execute the query. */
			    $stmt = sqlsrv_query( $conn, $tsql_callSP, $params);
			    if( $stmt === false )
			    {
			         echo "Error in executing statement.\n";
			         die( print_r( sqlsrv_errors(), true));
			    }

				sqlsrv_next_result($stmt);  
				echo $output_parameter;
			echo "kkkkkkk";
			     
			     


			    /*Free the statement and connection resources. */
			    sqlsrv_free_stmt($stmt);

			   
			    if($output_parameter==0)
			    {
			    	return false;
			    }
			    else{
			    	return true;
			    }

		}












		
		function s()
		{
    // Connect to DB. You can't pass $this->db, cause it's an object and the connection info
    // needs and Connection resource.
			$parameter1=1; $parameter2=1;
    $serverName = "HP,1433";
    $connectionInfo = array( "Database"=>"ad", "UID"=>"sa", "PWD"=>"mynameisanu");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    if( $conn === false ) {
         die( print_r( sqlsrv_errors(), true));
    }
    /* Define the Transact-SQL query. Use question marks  in place of
     the parameters to be passed to the stored procedure */
    $tsql_callSP = "{call assign_duty(?, ?, ?)}";
    /*
     * Define the parameter array. Put all parameter in the order they appear in the SP.
     * The second argument is needed to say if the parameter is an INPUT or an OUTPUT 
     */
    // This must be set as Integer, cause the initial type for the OUTPUT
    $output_parameter ='out_parameter123456789';
    $params = array( 
                  array($parameter1, SQLSRV_PARAM_IN),
                  array($parameter2, SQLSRV_PARAM_IN),
                  array($output_parameter, SQLSRV_PARAM_OUT)
               );
    /* Execute the query. */
    $stmt = sqlsrv_query( $conn, $tsql_callSP, $params);
    if( $stmt === false )
    {
         echo "Error in executing statement.\n";
         die( print_r( sqlsrv_errors(), true));
    }

	sqlsrv_next_result($stmt);  
	echo $output_parameter;
     
     


    /*Free the statement and connection resources. */
    sqlsrv_free_stmt($stmt);

   
    return $output_parameter;

  }
}