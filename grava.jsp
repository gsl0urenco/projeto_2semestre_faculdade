<%@page language="java" import="java.sql.*"%>

<%
    //variaveis e informações digitadas pelo usuário
    String vnome = request.getParameter("nome");
    String vsobrenome = request.getParameter("sobrenome");
    String vcpf = request.getParameter("cpf");
    String vemail = request.getParameter("email");
    String vtel = request.getParameter("tel");
    String vsenha = request.getParameter("senha");
    String vcsenha = request.getParameter("csenha");

    //variaveis banco de dados
    String banco    = "visitantes";
    String endereco = "jdbc:mysql://localhost:3306/" + banco ;
    String usuario  = "root" ;
    String senha    = "" ;

    //driver
    String driver   = "com.mysql.jdbc.Driver" ;
    Class.forName( driver );

    //conection with database
    Connection conexao ;
    conexao = DriverManager.getConnection(endereco, usuario, senha) ;

    //inserir na tabela do banco
    String sql = "INSERT INTO dados (nome, sobrenome, cpf, email, telefone , senha, csenha) values(?,?,?,?,?,?,?)" ;

    PreparedStatement stm = conexao.prepareStatement(sql);
    stm.setString(1, vnome);
    stm.setString(2, vsobrenome);
    stm.setString(3, vcpf);
    stm.setString(4, vemail);
    stm.setString(5, vtel);
    stm.setString(6, vsenha);
    stm.setString(7, vcsenha);

    stm.execute() ;
    stm.close() ;
    
    out.print("<h3 style='background: #90EE90; color: #000080; width: 400px; margin: 0 auto; padding: 30px; text-align: center;'>Dados gravados com sucesso!!!<br><br><a style='text-decoration: none; color: #fff; background: #4682B4; padding: 6px;' href='index.php'>Voltar</a><h3>");
    
    

%>