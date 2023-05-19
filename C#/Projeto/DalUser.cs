using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using static System.Windows.Forms.VisualStyles.VisualStyleElement.ListView;

namespace Projeto
{
    public class DalUser
    {
        private const string V = "0";
        Conexao conexao = new Conexao();
        MySqlCommand cmd = new MySqlCommand();
       
        public DalUser() { 
                
        }

        public void Cadastrar(String nome, String email) {
            cmd.CommandText = "INSERT INTO user (nome, email) values(@nome,@email)";
            cmd.Parameters.AddWithValue("@nome",nome);
            cmd.Parameters.AddWithValue("@email",email);
            try {
                cmd.Connection = conexao.conectar();
                cmd.ExecuteNonQuery();
                conexao.Closed();
                MessageBox.Show("Usuario Inserido com sucesso!","OK!",MessageBoxButtons.OK,MessageBoxIcon.Exclamation);

            }catch(Exception ex) {
                conexao.Closed();
                MessageBox.Show("Erro ao inserir usuario : "+ ex,"Error",MessageBoxButtons.OK,MessageBoxIcon.Error);
            }
        }
        public  List <User> Listar()
        {
            cmd.CommandText = "SELECT * FROM user";
            List<User> result = new();
            try
            {
                cmd.Connection = conexao.conectar();
                MySqlDataReader reader = cmd.ExecuteReader();

              
                while (reader.Read())
                {
                    User user = new User();
                    user.id = reader.IsDBNull(0) ? null : reader.GetString(0);
                    user.name = reader.IsDBNull(1) ? null : reader.GetString(1);
                    user.email = reader.IsDBNull(2) ? "Sem email" : reader.GetString(2);

                    result.Add(user);


                }
               
                conexao.Closed();

                return result;
            }
            catch (Exception ex)
            {
                conexao.Closed();
                MessageBox.Show("Erro ao listar os resultados : " + ex);

                return result;
            }
           
        }
    }
}
