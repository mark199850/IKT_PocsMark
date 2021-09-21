using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Hegyek
{
    class Hegy
    {
        public string csucsnev { get; private set; }
        public string hegy { get; private set; }
        public int magassag { get; private set; }

        public Hegy(string sor) //konstruktor: nincs visszatérési értéke, a neve ugyan az mint az osztálynak
        {
            string[] darabol = sor.Split(';');
            this.csucsnev = darabol[0]; //this. -ot is eléjük lehet írni
            hegy = darabol[1];
            magassag = Convert.ToInt32(darabol[2]);
        }

    }
}
