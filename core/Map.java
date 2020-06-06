// Java program to demonstrate implementation of our 
// own hash table with chaining for collision detection 
import java.util.ArrayList;
import java.util.Collections;  

public class Map<K, V> { 

	private ArrayList<HashNode<K, V>> bucketArray; 
	private int numBuckets; 
	private int size; 

	public Map() 
	{ 
		bucketArray = new ArrayList<>(); 
		numBuckets = 10; 
		size = 0; 

		for (int i = 0; i < numBuckets; i++) 
			bucketArray.add(null); 
	} 

	public int size() { 
		return size; 
	} 

	public boolean isEmpty() { 
		return size() == 0; 
	} 

	private int getBucketIndex(K key) { 
		int hashCode = key.hashCode(); 
		int index = hashCode % numBuckets; 
		return Math.abs(index); 
	} 

	public V remove(K key) { 

		int bucketIndex = getBucketIndex(key); 
		HashNode<K, V> head = bucketArray.get(bucketIndex); 

		HashNode<K, V> prev = null; 
		while (head != null) { 
		
			if (head.key.equals(key)) 
				break; 

			prev = head; 
			head = head.next; 
		} 

		if (head == null) 
			return null; 

		size--; 

		if (prev != null) 
			prev.next = head.next; 
		else
			bucketArray.set(bucketIndex, head.next); 

		return head.value; 
	}

	public V get(K key) { 
		
		int bucketIndex = getBucketIndex(key); 
		HashNode<K, V> head = bucketArray.get(bucketIndex); 

		while (head != null) { 
			if (head.key.equals(key)) 
				return head.value; 
			head = head.next; 
		} 

		return null; 
	} 

	public void add(K key, V value) { 
		int bucketIndex = getBucketIndex(key); 
		HashNode<K, V> head = bucketArray.get(bucketIndex); 

		while (head != null) { 
			if (head.key.equals(key)) 
			{ 
				head.value = value; 
				return; 
			} 
			head = head.next; 
		} 

		size++; 
		head = bucketArray.get(bucketIndex); 
		HashNode<K, V> newNode = new HashNode<K, V>(key, value); 
		newNode.next = head; 
		bucketArray.set(bucketIndex, newNode); 

		if ((1.0*size)/numBuckets >= 0.7) { 
			ArrayList<HashNode<K, V>> temp = bucketArray; 
			bucketArray = new ArrayList<>(); 
			numBuckets = 2 * numBuckets; 
			size = 0; 
			for (int i = 0; i < numBuckets; i++) 
				bucketArray.add(null); 

			for (HashNode<K, V> headNode : temp) { 
				while (headNode != null) { 
					add(headNode.key, headNode.value); 
					headNode = headNode.next; 
				} 
			} 
		} 
	} 

	public void searchEditor(String key, ArrayList<String> result){
		if(result != null){
			Collections.sort(result);
			System.out.println("<h5 class='mb-3'>Daftar artikel dengan editor "+key+" </h5>");
			System.out.print("<ul class='list-group'>");
			result.forEach((e)->System.out.print("<li class='list-group-item list-group-item-action'>"+e+"</li>"));
			System.out.print("</ul>");
		}
		else{
			System.out.println("Data For "+key+" Not Found");
		}
	}
} 
