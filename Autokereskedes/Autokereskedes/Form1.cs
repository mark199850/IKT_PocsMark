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

namespace Autokereskedes
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
            label6.Text = "Új állomány:";
            label7.Text = "";
        }

        private void button1_Click(object sender, EventArgs e)
        {
            string[] autoAdatTomb;
            string autoItem = "";
            bool van = false;
            foreach (var item in listBox1.Items)
            {
                autoItem = item.ToString();
                autoAdatTomb = autoItem.Split(';');
                if (textBox5.Text == autoAdatTomb[4])
                {
                    van = true;
                }
            }

            if (van == true)
            {
                MessageBox.Show("Már létezik ilyen autó!");
            }
            else
            {
                listBox1.Items.Add(textBox1.Text + ";" + textBox2.Text + ";" + textBox3.Text + ";" + textBox4.Text + ";" + textBox5.Text);

            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            if (listBox1.SelectedIndex != -1)
            {
                listBox1.Items.Remove(listBox1.SelectedItem);
            }
            else
            {
                MessageBox.Show("Egy elem sincs kiválasztva!");
            }
            
        }

        private void button3_Click(object sender, EventArgs e)
        {
            if (listBox1.SelectedIndex != -1)
            {
            listBox1.Items[listBox1.SelectedIndex] = textBox1.Text + ";" + textBox2.Text + ";" + textBox3.Text + ";" + textBox4.Text + ";" + textBox5.Text;
            }
            else
            {
                MessageBox.Show("Egy elem sincs kiválasztva!");
            }
            
       }

        private void listBox1_SelectedIndexChanged(object sender, EventArgs e)
        {
            if (listBox1.SelectedIndex != -1)
            {
                string item = listBox1.SelectedItem.ToString();
                string[] auto = item.Split(';');
                textBox1.Text = auto[0];
                textBox2.Text = auto[1];
                textBox3.Text = auto[2];
                textBox4.Text = auto[3];
                textBox5.Text = auto[4];
            }

        }

        private void megnyitásToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Megnyit();

        }

        void Kiir(bool uj)
        {
            string filename = "";
            if (uj == true)
            {
                SaveFileDialog s = new SaveFileDialog();
                s.ShowDialog();
                filename = s.FileName;
            }
            else
            {
                filename = label7.Text;
            }


            StreamWriter sw = new StreamWriter(filename);
            foreach (var item in listBox1.Items)
            {
                sw.WriteLine(item);
            }
            sw.Close();
        }

        void Megnyit()
        {
            OpenFileDialog o = new OpenFileDialog();
            o.ShowDialog();
            string filename = o.FileName;
            StreamReader sr = new StreamReader(filename);
            while (!sr.EndOfStream)
            {
                listBox1.Items.Add(sr.ReadLine());
            }
            sr.Close();
            label6.Text = "Megnyitott állomány:";
            label7.Text = filename;
        }

        private void mentésToolStripMenuItem_Click(object sender, EventArgs e)
        {
           Kiir(false);
        }

        private void újLétrehozásToolStripMenuItem_Click(object sender, EventArgs e)
        {
            Kiir(true);
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }
    }
}
