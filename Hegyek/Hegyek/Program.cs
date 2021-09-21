using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace Hegyek
{
    class Program
    {
        static void Main(string[] args)
        {
            List<Hegy> lista = new List<Hegy>();
            StreamReader sr = new StreamReader("hegyekMo.txt");
            sr.ReadLine();

            while (!sr.EndOfStream) //sr.Peek()
            {
                lista.Add(new Hegy(sr.ReadLine()));
            }
            //Feladat 1
            Console.WriteLine("Feladat 1: "+lista.Count);
            
            //Feladat 2
            double sum = 0;
            foreach (var item in lista)
            {
                sum = sum + item.magassag;
            }

            Console.WriteLine("2. Feladat: " + sum / lista.Count);

            //Feladat 3

            int max = lista[0].magassag;
            int id = 0;
            for (int i = 1; i < lista.Count; i++)
            {
                if(lista[i].magassag > max)
                {
                    max = lista[i].magassag;
                    id = i;
                }
            }

            Console.WriteLine("3. Feladat :"+"\n\t" +lista[id].csucsnev+"\n\t"+lista[id].hegy+"\n\t"+lista[id].magassag+" m");



            //Feladat 4
            int m;
            Console.Write("Kérek egy egész számot: ");
            m = int.Parse(Console.ReadLine());
            bool van = false;
            int id2 = 0;

            for (int i = 0; i < lista.Count; i++)
            {
                if (lista[i].magassag > m)
                {
                    van = true;
                    id2 = i;
                    break;
                }
            }
            if (van)
            {
                Console.WriteLine("Van magasabb csúcs: {0}",lista[id2].csucsnev);
            }


            Console.ReadLine();
        }
    }
}
