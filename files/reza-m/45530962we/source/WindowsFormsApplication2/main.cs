using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.Net;

namespace WindowsFormsApplication2
{
    public partial class main : Form
    {
        string login1;
        string mac1;
        CookieContainer a1;
        public main(string login, string mac ,CookieContainer a)
        {
            InitializeComponent();
            login1 = login;
            mac1 = mac;
            a1 = a;

        }

        private void Form2_Load(object sender, EventArgs e)
        {
            if (login1 == "ok")
            {

                CookieAwareWebClient client = new CookieAwareWebClient(a1);
                var text = client.DownloadString("http://bitsoftware.ir/apiv2/fc.php?key=seeasdvy");
                label1.Text = text;
                label2.Text = "" + mac1;
            }
        }
    }
}
