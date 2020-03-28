using System;
namespace Stack.Model
{
    public class Stack<T>
    {
        public Item<T> Head { get; set; }
        public int Count { get; set; }
        public Stack()
        {
            Head = null;
            Count = 0;
        }

        public Stack(T data)
        {
            var item = new Item<T>(data);
            Head = item;
            Count = 1;
        }

        public void Push(T data)
        {
            var item = new Item<T>(data);
            item.Pevious = Head;
            Head = item;
            Count++;
        }

        public T Pop()
        {
            var item = Head;
            Head = Head.Pevious;
            Count--;
            return item.Data;
        }

        public T Peek()
        {
            return Head.Data;
        }
    }
}
