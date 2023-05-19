using System.Collections.Generic;

namespace Projeto
{
    public partial class Usuario : Form
    {
        DalUser Daluser = new();
        public Usuario()
        {
            InitializeComponent();
            popularListVew();
        }

        private void listView1_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (txNome.Text == "" || txEmail.Text == "")
            {
                MessageBox.Show("Os campos não podem está vazios!", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
            else
            {
                Daluser.Cadastrar(txNome.Text, txEmail.Text);
                popularListVew();

            }
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void label1_Click_1(object sender, EventArgs e)
        {

        }

        //popular listview
        public void popularListVew()
        {
            listUser.Items.Clear();
            List<User> users = Daluser.Listar();
            Daluser.Listar();
            foreach (var item in Daluser.Listar())
            {
                listUser.Items.Add(new ListViewItem(new string[] { Convert.ToString(item.id), item.name, item.email }));
            }
        }

        private void listUser_MouseClick(object sender, MouseEventArgs e)
        {
            txNome.Text = listUser.SelectedItems[0].SubItems[1].Text;
            txEmail.Text = listUser.SelectedItems[0].SubItems[2].Text;
        }

        private void txEmail_TextChanged(object sender, EventArgs e)
        {

        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void menuContext_Opening(object sender, System.ComponentModel.CancelEventArgs e)
        {

        }

        private void Usuario_Load(object sender, EventArgs e)
        {

        }

        private void Excluir_Click(object sender, EventArgs e)
        {

        }
    }
}