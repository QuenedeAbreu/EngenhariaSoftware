namespace Projeto
{
    partial class Usuario
    {

        private System.ComponentModel.IContainer components = null;

        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            components = new System.ComponentModel.Container();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Usuario));
            listUser = new ListView();
            columnHeader1 = new ColumnHeader();
            columnHeader2 = new ColumnHeader();
            columnHeader3 = new ColumnHeader();
            menuContext = new ContextMenuStrip(components);
            Excluir = new ToolStripMenuItem();
            Separador = new ToolStripSeparator();
            editarToolStripMenuItem = new ToolStripMenuItem();
            txNome = new TextBox();
            txEmail = new TextBox();
            btnCadastrar = new Button();
            lbname = new Label();
            lbEmail = new Label();
            menuContext.SuspendLayout();
            SuspendLayout();
            // 
            // listUser
            // 
            listUser.Columns.AddRange(new ColumnHeader[] { columnHeader1, columnHeader2, columnHeader3 });
            listUser.ContextMenuStrip = menuContext;
            listUser.FullRowSelect = true;
            listUser.Location = new Point(12, 135);
            listUser.Name = "listUser";
            listUser.Size = new Size(668, 199);
            listUser.TabIndex = 0;
            listUser.UseCompatibleStateImageBehavior = false;
            listUser.View = View.Details;
            listUser.MouseClick += listUser_MouseClick;
            // 
            // columnHeader1
            // 
            columnHeader1.Text = "ID";
            columnHeader1.Width = 80;
            // 
            // columnHeader2
            // 
            columnHeader2.Text = "Nome";
            columnHeader2.Width = 300;
            // 
            // columnHeader3
            // 
            columnHeader3.Text = "Email";
            columnHeader3.Width = 300;
            // 
            // menuContext
            // 
            menuContext.Items.AddRange(new ToolStripItem[] { Excluir, Separador, editarToolStripMenuItem });
            menuContext.Name = "menuContext";
            menuContext.Size = new Size(181, 76);
            menuContext.Opening += menuContext_Opening;
            // 
            // Excluir
            // 
            Excluir.Image = (Image)resources.GetObject("Excluir.Image");
            Excluir.Name = "Excluir";
            Excluir.Size = new Size(180, 22);
            Excluir.Text = "Editar";
            Excluir.Click += Excluir_Click;
            // 
            // Separador
            // 
            Separador.Name = "Separador";
            Separador.Size = new Size(177, 6);
            // 
            // editarToolStripMenuItem
            // 
            editarToolStripMenuItem.Image = (Image)resources.GetObject("editarToolStripMenuItem.Image");
            editarToolStripMenuItem.Name = "editarToolStripMenuItem";
            editarToolStripMenuItem.Size = new Size(180, 22);
            editarToolStripMenuItem.Text = "Excluir";
            // 
            // txNome
            // 
            txNome.Location = new Point(13, 92);
            txNome.Name = "txNome";
            txNome.Size = new Size(212, 23);
            txNome.TabIndex = 1;
            // 
            // txEmail
            // 
            txEmail.Location = new Point(231, 92);
            txEmail.Name = "txEmail";
            txEmail.Size = new Size(238, 23);
            txEmail.TabIndex = 2;
            txEmail.TextChanged += txEmail_TextChanged;
            // 
            // btnCadastrar
            // 
            btnCadastrar.Location = new Point(475, 92);
            btnCadastrar.Name = "btnCadastrar";
            btnCadastrar.Size = new Size(75, 23);
            btnCadastrar.TabIndex = 3;
            btnCadastrar.Text = "Cadastrar";
            btnCadastrar.UseVisualStyleBackColor = true;
            btnCadastrar.Click += button1_Click;
            // 
            // lbname
            // 
            lbname.AutoSize = true;
            lbname.BackColor = Color.Transparent;
            lbname.Font = new Font("Comic Sans MS", 14.25F, FontStyle.Bold, GraphicsUnit.Point);
            lbname.ForeColor = Color.Coral;
            lbname.Location = new Point(12, 62);
            lbname.Name = "lbname";
            lbname.Size = new Size(63, 27);
            lbname.TabIndex = 4;
            lbname.Text = "Nome";
            lbname.Click += label1_Click;
            // 
            // lbEmail
            // 
            lbEmail.AutoSize = true;
            lbEmail.BackColor = Color.Transparent;
            lbEmail.Font = new Font("Comic Sans MS", 14.25F, FontStyle.Bold, GraphicsUnit.Point);
            lbEmail.ForeColor = Color.Coral;
            lbEmail.Location = new Point(231, 62);
            lbEmail.Name = "lbEmail";
            lbEmail.Size = new Size(72, 27);
            lbEmail.TabIndex = 5;
            lbEmail.Text = "E-mail";
            lbEmail.Click += label1_Click_1;
            // 
            // Usuario
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            BackColor = SystemColors.ActiveCaptionText;
            BackgroundImage = (Image)resources.GetObject("$this.BackgroundImage");
            ClientSize = new Size(692, 351);
            Controls.Add(lbEmail);
            Controls.Add(lbname);
            Controls.Add(btnCadastrar);
            Controls.Add(txEmail);
            Controls.Add(txNome);
            Controls.Add(listUser);
            Name = "Usuario";
            Text = "Form1";
            Load += Usuario_Load;
            menuContext.ResumeLayout(false);
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private ListView listUser;
        private ColumnHeader columnHeader1;
        private ColumnHeader columnHeader2;
        private ColumnHeader columnHeader3;
        private TextBox txNome;
        private TextBox txEmail;
        private Button btnCadastrar;
        private Label lbname;
        private Label lbEmail;
        private ContextMenuStrip menuContext;
        private ToolStripMenuItem Excluir;
        private ToolStripSeparator Separador;
        private ToolStripMenuItem editarToolStripMenuItem;
    }
}