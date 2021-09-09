using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Net;
using System.Management;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;

namespace WindowsFormsApplication2
{
    public partial class login : Form
    {

        public login()
        {
            InitializeComponent();
        }
       
        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

     
        int i = 1;
        private void timer1_Tick(object sender, EventArgs e)
        {
            if (i==1) { 
           CookieContainer cookieJar = new CookieContainer();
            if (webBrowser1.Document.Cookie.Length > 5) { 
            string[] cookies = webBrowser1.Document.Cookie.Split(new char[] { '=' });
            cookieJar.Add(new Cookie(cookies[0], cookies[1], "/", "bitsoftware.ir"));
            CookieAwareWebClient client = new CookieAwareWebClient(cookieJar);
            var text = client.DownloadString("http://bitsoftware.ir/apiv2/fc.php?key=seeasdvy");

               
            if (text == "ok")
            {
                    var text1 = text;
                    var text2 = "ورود موفق";
                    main r1 = new main(text1, text2, cookieJar);
                    r1.Show();
                    this.Hide();
                    i = 0;
                }
            }
            }
        }

    }
    }

