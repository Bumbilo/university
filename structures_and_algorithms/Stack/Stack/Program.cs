using System;
using Stack.Model;

namespace Stack
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
            var easyStack = new EasyStack<int>();

            easyStack.Push(1);
            easyStack.Push(2);
            easyStack.Push(3);
            easyStack.Push(4);

            var item = easyStack.Pop();
            var item2 = easyStack.Peek();

            Console.WriteLine(item);
            Console.WriteLine(item2);
        }
    }
}
