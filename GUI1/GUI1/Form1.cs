using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;

namespace GUI1
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {


            try
            {
                int a = Convert.ToInt32(textBox1.Text);
                int b = Convert.ToInt32(textBox2.Text);

                listBox1.Items.Add(a+b);
            }
            catch (Exception error)
            {
                MessageBox.Show(error.Message);
            }
        }

        string filename = "";
        private void saveToolStripMenuItem_Click(object sender, EventArgs e)
        {

        }

        private void saveAsToolStripMenuItem_Click(object sender, EventArgs e)
        {

           
                if (listBox1.Items.Count != 0)
                {
                    Kiir();
                }
                else
                {
                    DialogResult dialogResult = MessageBox.Show("Üres a listbox!", "Figyelmeztetés", MessageBoxButtons.YesNo);
                    if (dialogResult == DialogResult.Yes)
                    {
                        Kiir();
                    }
                    else if (dialogResult == DialogResult.No)
                    {

                    }
                }
               
            void Kiir()
            {
                SaveFileDialog s = new SaveFileDialog();
                s.ShowDialog();
                filename = s.FileName;

                StreamWriter sw = new StreamWriter(filename);
                foreach (var item in listBox1.Items)
                {
                    sw.WriteLine(item);
                }
                sw.Close();
            }

        }

        private void openToolStripMenuItem_Click(object sender, EventArgs e)
        {
            OpenFileDialog o = new OpenFileDialog();
            o.ShowDialog();
            filename = o.FileName;
            StreamReader sr = new StreamReader(filename);
            while (!sr.EndOfStream)
            {
                listBox1.Items.Add(sr.ReadLine());
            }
            sr.Close();
        }
    }
}
