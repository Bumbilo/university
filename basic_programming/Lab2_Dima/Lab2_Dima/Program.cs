using System;
using System.Windows.Forms;

namespace Lab2_Dima
{
    class Program
    {
        static void Main(string[] args)
        {
            // Read, ReadLine, ReadKey, Write(). CursorLeft, CursorTop
            Console.WriteLine("Hello!\nwrite your name please");
            Console.Write("Name: ");
            string name = Console.ReadLine();
            Console.WriteLine("Hello " + name + " could you write age");
            Console.Write("Age: ");
            // Read
            int age = Console.Read();
            Console.Write(Convert.ToChar(age));
            //MessageBox.Show(&quot; Выход!!! & quot;, &quot; Внимание & quot;, MessageBoxButtons.OK,     MessageBoxIcon.Information);            
        }
    }
}
 