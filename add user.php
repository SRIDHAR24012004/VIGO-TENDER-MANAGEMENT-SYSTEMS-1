<?php
echo '<?php';
echo '$pagecode=   "<?php';
echo '';
echo '';
echo '';
echo '<%';
echo '';
echo '';
echo 'String un=request.getParameter(\\\"username\\\");';
echo 'String fn=request.getParameter(\\\"firstName\\\");';
echo 'String ln=request.getParameter(\\\"lastName\\\");';
echo 'String usertype=request.getParameter(\\\"userType\\\");';
echo 'String age=request.getParameter(\\\"age\\\");';
echo 'String sex=request.getParameter(\\\"sex\\\");';
echo 'String qualif=request.getParameter(\\\"qualification\\\");';
echo 'String occ=request.getParameter(\\\"occupation\\\");';
echo 'String cmp=request.getParameter(\\\"company\\\");';
echo 'String hadd=request.getParameter(\\\"homeAddress\\\");';
echo 'String cadd=request.getParameter(\\\"companyAddress\\\");';
echo 'String em=request.getParameter(\\\"email\\\");';
echo 'String ph=request.getParameter(\\\"phoneNo\\\");';
echo 'String pwd=request.getParameter(\\\"password\\\");';
echo 'String rpwd=request.getParameter(\\\"retypepassword\\\");';
echo '';
echo 'String q=\\\"insert into registration values(" \\\"+fn+\\\"','\\\"+ln+\\\"','\\\"+pwd+\\\"','\\\"+rpwd+\\\"','\\\"+age+\\\"','\\\"+sex+\\\"','\\\"+qualif+\\\"','\\\"+occ+\\\"','\\\"+cmp+\\\"','\\\"+cadd+\\\"','\\\"+ph+\\\"','\\\"+hadd+\\\"','\\\"+em+\\\"','\\\"+un+\\\")\\\";';
echo '';
echo 'String p=\\\"insert into login values("\\\"+pwd+\\\"','\\\"+usertype+\\\"','\\\"+un+\\\")\\\";';
echo '';
echo 'int t=st.executeUpdate(q);';
echo '';
echo 'if(t>0)';
echo '{';
echo 'int n=st.executeUpdate(p);';
echo 'if(n>0)';
echo '{';
echo '%>';
echo 'U R successFully Registerd';
echo '<jsp:include page=\\\"HOME PAGE.HTML\\\"/>';
echo '<%';
echo '}';
echo 'else';
echo '{';
echo 'out.println(\\\"Registration Failed try agian\\\");';
echo '';
echo '}';
echo '}';
echo '';
echo '';
echo '%>';
echo '';
echo '';
echo '\n\\";';
echo '?>"\n\";';
echo '';
echo 'echo \"$pagecode\";';
echo '?>\n";';
echo '';
echo 'echo "$pagecode";';
echo '?>';