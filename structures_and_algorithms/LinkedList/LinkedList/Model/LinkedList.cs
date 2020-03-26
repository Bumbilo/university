﻿using System;
using System.Collections;

namespace LinkedList.Model
{
    public class LinkedList<T> : IEnumerable
    {
        public Item<T> Head { get; private set; }
        public Item<T> Tail { get; private set; }
        public int Count { get; private set; }

        public LinkedList()
        {
            Clear();
        }

        public LinkedList(T data)
        {
            SetHeadAndTail(data);
        }

        public void Add(T data)
        {
            var item = new Item<T>(data);

            if(Tail != null)
            {
                Tail.Next = item;
                Tail = item;
                Count++;
            } else
            {
                SetHeadAndTail(data);
            }
        }

        public void Clear()
        {
            Head = null;
            Tail = null;
            Count = 0;
        }

        public void Remove(T data)
        {
            if(Head != null)
            {
                if (Head.Data.Equals(data))
                {
                    Head = Head.Next;
                    Count--;
                    return;
                }

                var current = Head.Next;
                var previus = Head;


                while(current != null)
                {
                    if(current.Data.Equals(data))
                    {
                        previus.Next = current.Next;
                        Count--;
                        return;
                    }
                    previus = current;
                    current = current.Next;
                }
            }
        }
        // Init Head and tail
        private void SetHeadAndTail(T data)
        {
            var item = new Item<T>(data);
            Head = item;
            Tail = item;
            Count = 1;
        }
        public IEnumerator GetEnumerator()
        {
            var current = Head;
            while(current != null)
            {
                yield return current.Data;
                current = current.Next;
            }
        }
        public override string ToString()
        {
            return "Linked List:" + Count + " elements";
        }
    }
}
