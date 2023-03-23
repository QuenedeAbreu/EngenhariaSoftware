namespace SistemaGrafico
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
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
            botaoform2 = new Button();
            campoTexto = new Label();
            campon1 = new TextBox();
            campon2 = new TextBox();
            SuspendLayout();
            // 
            // botaoform2
            // 
            botaoform2.BackColor = Color.Silver;
            botaoform2.Location = new Point(115, 217);
            botaoform2.Name = "botaoform2";
            botaoform2.Size = new Size(191, 66);
            botaoform2.TabIndex = 0;
            botaoform2.Text = "Botão";
            botaoform2.UseVisualStyleBackColor = false;
            botaoform2.Click += botaoform2_Click;
            // 
            // campoTexto
            // 
            campoTexto.AutoSize = true;
            campoTexto.Font = new Font("Segoe UI", 36F, FontStyle.Bold, GraphicsUnit.Point);
            campoTexto.ForeColor = SystemColors.Control;
            campoTexto.Location = new Point(25, 315);
            campoTexto.Name = "campoTexto";
            campoTexto.Size = new Size(368, 65);
            campoTexto.TabIndex = 1;
            campoTexto.Text = "Seu Texto Aqui";
            campoTexto.Click += label1_Click;
            // 
            // campon1
            // 
            campon1.Location = new Point(158, 63);
            campon1.Multiline = true;
            campon1.Name = "campon1";
            campon1.Size = new Size(99, 26);
            campon1.TabIndex = 2;
            // 
            // campon2
            // 
            campon2.Location = new Point(158, 139);
            campon2.Name = "campon2";
            campon2.Size = new Size(100, 23);
            campon2.TabIndex = 3;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            BackColor = SystemColors.ActiveCaptionText;
            ClientSize = new Size(415, 450);
            Controls.Add(campon2);
            Controls.Add(campon1);
            Controls.Add(campoTexto);
            Controls.Add(botaoform2);
            Name = "Form1";
            Text = "Form1";
            Load += Form1_Load;
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Button botaoform2;
        private Label campoTexto;
        private TextBox campon1;
        private TextBox campon2;
    }
}