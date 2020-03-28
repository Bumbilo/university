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



            var stack = new Stack<int>();

            stack.Push(1);
            stack.Push(2);
            stack.Push(2);
            stack.Push(3);
            stack.Push(31);
            stack.Push(32);

            var item3 = stack.Pop();
            var item4 = stack.Peek();

            Console.WriteLine(item3);
            Console.WriteLine(item4);
        }
    }
}
