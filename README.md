# 💫 LeetCode for PHP 🐘

[![Build Status](https://travis-ci.com/imajinyun/leetcode-php.svg?branch=master)](https://travis-ci.com/imajinyun/leetcode-php)
[![Build status](https://ci.appveyor.com/api/projects/status/63m04iayror6ieh2?svg=true)](https://ci.appveyor.com/project/imajinyun/leetcode-php)
[![PHP Composer](https://github.com/imajinyun/leetcode-php/actions/workflows/php.yml/badge.svg?branch=master)](https://github.com/imajinyun/leetcode-php/actions/workflows/php.yml)
[![codecov](https://codecov.io/gh/imajinyun/leetcode-php/branch/master/graph/badge.svg?token=Y9H1AHWLFY)](https://codecov.io/gh/imajinyun/leetcode-php)
[![StyleCI](https://github.styleci.io/repos/363634864/shield?branch=master)](https://github.styleci.io/repos/363634864?branch=master)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=leetcode-php&metric=alert_status)](https://sonarcloud.io/dashboard?id=leetcode-php)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/imajinyun/leetcode-php/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/imajinyun/leetcode-php/?branch=master)
[![Version](https://img.shields.io/static/v1?label=version&message=%3E%3D8.0&color=%234F5893&labelColor=grey&logo=PHP&logoColor=blue&style=flat&link=https%3A%2F%2Fwww.php.net%2Fsupported-versions.php)](https://www.php.net/supported-versions.php)
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Fimajinyun%2Fleetcode-php.svg?type=shield)](https://app.fossa.com/projects/git%2Bgithub.com%2Fimajinyun%2Fleetcode-php?ref=badge_shield)

## Requirements

* PHP >= 8.0
* PHPUnit >= 9.5

## Installation

Install the package through [Composer](https://getcomposer.org/).

Run the Composer require command from the Terminal:

```bash
git clone git@github.com:imajinyun/leetcode-php.git
cd leetcode-php
composer install
```

## Usage

```bash
phpunit -vvv
```

## Contents

### LeetCode

<details>
<summary>String</summary>

|题目|来源|实现|
|---|---|---|

</details>


<details>
<summary>Array</summary>

|题目|来源|实现|
|---|---|---|
|`0001. 两数之和`|[Two Sum](https://leetcode.com/problems/two-sum/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/TwoSum.php)|
|`0118. 杨辉三角`|[Pascal's Triangle](https://leetcode.com/problems/pascals-triangle/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/PascalsTriangle.php)|
|`0026. 删除有序数组中的重复项`|[Remove Duplicates from Sorted Array](https://leetcode.com/problems/remove-duplicates-from-sorted-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/RemoveDuplicatesFromSortedArray.php)|
|`0027. 移除元素`|[Remove Element](https://leetcode.com/problems/remove-element/)||
|`0035. 搜索插入位置`|[Search Insert Position](https://leetcode.com/problems/search-insert-position/)||
|`0053. 最大子序和`|[Maximum Subarray](https://leetcode.com/problems/maximum-subarray/)||
|`0066. 加一`|[Plus One](https://leetcode.com/problems/plus-one/)||
|`0088. 合并两个有序数组`|[Merge Sorted Array](https://leetcode.com/problems/merge-sorted-array/)||
|`0118. 杨辉三角`|[Pascal's Triangle](https://leetcode.com/problems/pascals-triangle/)||
|`0119. 杨辉三角 II`|[Pascal's Triangle II](https://leetcode.com/problems/pascals-triangle-ii/)||
|`0121. 买卖股票的最佳时机`|[Best Time to Buy and Sell Stock](https://leetcode.com/problems/best-time-to-buy-and-sell-stock/)||
|`0122. 买卖股票的最佳时机 II`|[Best Time to Buy and Sell Stock II](https://leetcode.com/problems/best-time-to-buy-and-sell-stock-ii/)||
|`0163. 缺失的区间`|[Missing Ranges](https://leetcode.com/problems/missing-ranges/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MissingRanges.php)|
|`0167. 两数之和 II - 输入有序数组`|[Two Sum II - Input array is sorted](https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/)||
|`0169. 多数元素`|[Majority Element](https://leetcode.com/problems/majority-element/)||
|`0217. 存在重复元素`|[Contains Duplicate](https://leetcode.com/problems/contains-duplicate/)||
|`0219. 存在重复元素 II`|[Contains Duplicate II](https://leetcode.com/problems/contains-duplicate-ii/)||
|`0228. 汇总区间`|[Summary Ranges](https://leetcode.com/problems/summary-ranges/)||
|`0243. 最短单词距离`|[Shortest Word Distance](https://leetcode.com/problems/shortest-word-distance/)||
|`0268. 丢失的数字`|[Missing Number](https://leetcode.com/problems/missing-number/)||
|`0283. 移动零`|[Move Zeroes](https://leetcode.com/problems/move-zeroes/)||
|`0414. 第三大的数`|[Third Maximum Number](https://leetcode.com/problems/third-maximum-number/)||
|`0448. 找到所有数组中消失的数字`|[Find All Numbers Disappeared in an Array](https://leetcode.com/problems/find-all-numbers-disappeared-in-an-array/)||
|`0485. 最大连续 1 的个数`|[Max Consecutive Ones](https://leetcode.com/problems/max-consecutive-ones/)||
|`0509. 斐波那契数`|[Fibonacci Number](https://leetcode.com/problems/fibonacci-number/)||
|`0561. 数组拆分 I`|[Array Partition I](https://leetcode.com/problems/array-partition-i/)||
|`0566. 重塑矩阵`|[Reshape the Matrix](https://leetcode.com/problems/reshape-the-matrix/)||
|`0605. 种花问题`|[Can Place Flowers](https://leetcode.com/problems/can-place-flowers/)||
|`0628. 三个数的最大乘积`|[Maximum Product of Three Numbers](https://leetcode.com/problems/maximum-product-of-three-numbers/)||
|`0643. 子数组最大平均数 I`|[Maximum Average Subarray I](https://leetcode.com/problems/maximum-average-subarray-i/)||
|`0661. 图片平滑器`|[Image Smoother](https://leetcode.com/problems/image-smoother/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ImageSmoother.php)|
|`0674. 最长连续递增序列`|[Longest Continuous Increasing Subsequence](https://leetcode.com/problems/longest-continuous-increasing-subsequence/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/LongestContinuousIncreasingSubsequence.php)|
|`0697. 数组的度`|[Degree of an Array](https://leetcode.com/problems/degree-of-an-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/DegreeOfAnArray.php)|
|`0717. 1 比特与 2 比特字符`|[1-bit and 2-bit Characters](https://leetcode.com/problems/1-bit-and-2-bit-characters/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/OneBitAndTwoBitCharacters.php)|
|`0724. 寻找数组的中心下标`|[Find Pivot Index](https://leetcode.com/problems/find-pivot-index/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FindPivotIndex.php)|
|`0746. 使用最小花费爬楼梯`|[Min Cost Climbing Stairs](https://leetcode.com/problems/min-cost-climbing-stairs/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MinCostClimbingStairs.php)|
|`0747. 至少是其他数字两倍的最大数`|[Largest Number At Least Twice of Others](https://leetcode.com/problems/largest-number-at-least-twice-of-others/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/LargestNumberAtLeastTwiceOfOthers.php)|
|`0766. 托普利茨矩阵`|[Toeplitz Matrix](https://leetcode.com/problems/toeplitz-matrix/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ToeplitzMatrix.php)|
|`0830. 较大分组的位置`|[Positions of Large Groups](https://leetcode.com/problems/positions-of-large-groups/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/PositionsOfLargeGroups.php)|
|`0832. 翻转图像`|[Flipping an Image](https://leetcode.com/problems/flipping-an-image/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FlippingAnImage.php)|
|`0867. 转置矩阵`|[Transpose Matrix](https://leetcode-cn.com/problems/transpose-matrix/)|[Solution]()|
|`0888. 公平的糖果棒交换`|[Fair Candy Swap](https://leetcode.com/problems/fair-candy-swap/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FairCandySwap.php)|
|`0896. 单调数列`|[Monotonic Array](https://leetcode.com/problems/monotonic-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/MonotonicArray.php)|
|`0905. 按奇偶排序数组`|[Sort Array By Parity](https://leetcode.com/problems/sort-array-by-parity/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SortArrayByParity.php)|
|`0914. 卡牌分组`|[X of a Kind in a Deck of Cards](https://leetcode.com/problems/x-of-a-kind-in-a-deck-of-cards/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/XOfAKindInADeckOfCards.php)|
|`0922. 按奇偶排序数组 II`|[Sort Array By Parity II](https://leetcode.com/problems/sort-array-by-parity-ii/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SortArrayByParityII.php)|
|`0941. 有效的山脉数组`|[Valid Mountain Array](https://leetcode.com/problems/valid-mountain-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ValidMountainArray.php)|
|`0977. 有序数组的平方`|[Squares of a Sorted Array](https://leetcode.com/problems/squares-of-a-sorted-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SquaresOfASortedArray.php)|
|`0985. 查询后的偶数和`|[Sum of Even Numbers After Queries](https://leetcode.com/problems/sum-of-even-numbers-after-queries/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SumOfEvenNumbersAfterQueries.php)|
|`0989. 数组形式的整数加法`|[Add to Array-Form of Integer](https://leetcode.com/problems/add-to-array-form-of-integer/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/AddToArrayFormOfInteger.php)|
|`0999. 可以被一步捕获的棋子数`|[Available Captures for Rook](https://leetcode.com/problems/available-captures-for-rook/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/AvailableCapturesForRook.php)|
|`1002. 查找常用字符`|[Find Common Characters](https://leetcode.com/problems/find-common-characters/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FindCommonCharacters.php)|
|`1013. 将数组分成和相等的三个部分`|[Partition Array Into Three Parts With Equal Sum](https://leetcode.com/problems/partition-array-into-three-parts-with-equal-sum/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/PartitionArrayIntoThreePartsWithEqualSum.php)|
|`1018. 可被 5 整除的二进制前缀`|[Binary Prefix Divisible By 5](https://leetcode.com/problems/binary-prefix-divisible-by-5/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/HeightChecker.php)|
|`1051. 高度检查器`|[Height Checker](https://leetcode.com/problems/height-checker/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/HeightChecker.php)|
|`1064. 不动点`|[Fixed Point](https://leetcode.com/problems/fixed-point/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/FixedPoint.php)|
|`1085. 最小元素各数位之和`|[Sum of Digits in the Minimum Number](https://leetcode.com/problems/sum-of-digits-in-the-minimum-number/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SumOfDigitsInTheMinimumNumber.php)|
|`1086. 前五科的均分`|[High Five](https://leetcode.com/problems/high-five/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/HighFive.php)|
|`1089. 复写零`|[Duplicate Zeros](https://leetcode.com/problems/duplicate-zeros/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/DuplicateZeros.php)|
|`1099 小于 K 的两数之和`|[Two Sum Less Than K](https://leetcode.com/problems/two-sum-less-than-k/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/TwoSumLessThanK.php)|
|`1122. 数组的相对排序`|[Relative Sort Array](https://leetcode.com/problems/relative-sort-array/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/RelativeSortArray.php)|
|`1128. 等价多米诺骨牌对的数量`|[Number of Equivalent Domino Pairs](https://leetcode.com/problems/number-of-equivalent-domino-pairs/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/NumberOfEquivalentDominoPairs.php)|

</details>

<details>
<summary>Linked List</summary>

|题目|来源|实现|
|---|---|---|
|`0002. 两数相加`|[Add Two Numbers](https://leetcode.com/problems/add-two-numbers/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/AddTwoNumbers.php)|
|`0024. 两两交换链表中的节点`|[Swap Nodes in Pairs](https://leetcode.com/problems/swap-nodes-in-pairs/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/SwapNodesInPairs.php)|
|`0206. 反转链表`|[Reverse Linked List](https://leetcode.com/problems/reverse-linked-list/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ReverseLinkedList.php)|
|`0141. 环形链表`|[Linked List Cycle](https://leetcode.com/problems/linked-list-cycle/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/LinkedListCycle.php)|

</details>

<details>
<summary>Stack</summary>

|题目|来源|实现|
|---|---|---|
|`0020. 有效的括号`|[Valid Parentheses](https://leetcode.com/problems/valid-parentheses/)|[Solution](https://github.com/imajinyun/leetcode-php/blob/master/src/leetcode/ValidParentheses.php)|
|`0496. 下一个更大元素 I`|[Next Greater Element I](https://leetcode.com/problems/next-greater-element-i/)||
|`0503. 下一个更大元素 II`|[Next Greater Element II](https://leetcode.com/problems/next-greater-element-ii/)||
|`0739. 每日温度`|[Daily Temperatures](https://leetcode.com/problems/daily-temperatures/)||

</details>

<details>
<summary>Queue</summary>

|题目|来源|实现|
|---|---|---|
|`0239. 滑动窗口最大值`|[Sliding Window Maximum](https://leetcode.com/problems/sliding-window-maximum/)||

</details>

<details>
<summary>Heap</summary>

|题目|来源|实现|
|---|---|---|
|`0703. 数据流中的第 K 大元素`|[Kth Largest Element in a Stream](https://leetcode.com/problems/kth-largest-element-in-a-stream/)||

</details>

<details>
<summary>Tree</summary>

|题目|来源|实现|
|---|---|---|
|`0020. 括号生成`|[Generate Parentheses](https://leetcode.com/problems/generate-parentheses/)||
|`0098. 验证二叉搜索树`|[Validate Binary Search Tree](https://leetcode.com/problems/validate-binary-search-tree/)||
|`0100. 相同的树`|[Same Tree](https://leetcode.com/problems/same-tree/)||
|`0102. 二叉树的层序遍历`|[Binary Tree Level Order Traversal](https://leetcode.com/problems/binary-tree-level-order-traversal/)||
|`0103. 二叉树的锯齿形层次遍历`|[Binary Tree Zigzag Level Order Traversal](https://leetcode.com/problems/binary-tree-zigzag-level-order-traversal/)||
|`0104. 二叉树的最大深度`|[Maximum Depth of Binary Tree](https://leetcode.com/problems/maximum-depth-of-binary-tree/)||
|`0199. 二叉树的右视图`|[Binary Tree Right Side View](https://leetcode.com/problems/binary-tree-right-side-view/)||
|`0235. 二叉搜索树的最近公共祖先`|[Lowest Common Ancestor of a Binary Search Tree](https://leetcode.com/problems/lowest-common-ancestor-of-a-binary-search-tree/)||
|`0236. 二叉树的最近公共祖先`|[Lowest Common Ancestor of a Binary Tree](https://leetcode.com/problems/lowest-common-ancestor-of-a-binary-tree/)||
|`0450. 删除二叉搜索树中的节点`|[Delete Node in a Binary Search Tree](https://leetcode.com/problems/delete-node-in-a-bst/)||
|`0515. 在每个树行中找最大值`|[Find Largest Value in Each Tree Row](https://leetcode.com/problems/find-largest-value-in-each-tree-row/)||
|`0637. 二叉树的层平均值`|[Average of Levels in Binary Tree](https://leetcode.com/problems/average-of-levels-in-binary-tree/)||
|`0700. 二叉搜索树中的搜索`|[Search in a Binary Search Tree](https://leetcode.com/problems/search-in-a-binary-search-tree/)||
|`0701. 二叉搜索树中的插入操作`|[Insert into a Binary Search Tree](https://leetcode.com/problems/insert-into-a-binary-search-tree/)||
|`0993. 二叉树的堂兄弟节点`|[Cousins in Binary Tree](https://leetcode.com/problems/cousins-in-binary-tree/)||

</details>

<details>
<summary>Graph</summary>

|题目|来源|实现|
|---|---|---|

</details>

<details>
<summary>Math</summary>

|题目|来源|实现|
|---|---|---|
|`0050. 计算 x 的 n 次幂`|[Pow(x, n)](https://leetcode.com/problems/powx-n/)||

</details>

<details>
<summary>Union Find</summary>

|题目|来源|实现|
|---|---|---|
|`0200. 岛屿数量`|[Number of Islands](https://leetcode.com/problems/number-of-islands/)||

</details>

<details>
<summary>Graph</summary>

|题目|来源|实现|
|---|---|---|

</details>

<details>
<summary>Binary Search</summary>

|题目|来源|实现|
|---|---|---|
|`0069. x 的平方根`|[Sqrt(x)](https://leetcode.com/problems/sqrtx/)||

</details>

<details>
<summary>Dynamic Programming</summary>

|题目|来源|实现|
|---|---|---|
|`0005. 最长回文子串`|[Longest Palindromic Substring](https://leetcode.com/problems/longest-palindromic-substring/)||
|`0062. 不同路径`|[Unique Paths](https://leetcode.com/problems/unique-paths/)||
|`0063. 不同路径 II`|[Unique Paths II](https://leetcode.com/problems/unique-paths-ii/)||
|`0064. 最小路径和`|[Minimum Path Sum](https://leetcode.com/problems/minimum-path-sum/)||
|`0070. 爬楼梯`|[Climbing Stairs](https://leetcode.com/problems/climbing-stairs/)||
|`0072. 编辑距离`|[Edit Distance](https://leetcode.com/problems/edit-distance/)||
|`0120. 三角形最小路径和`|[Triangle](https://leetcode.com/problems/triangle/)||
|`0121. 买卖股票的最佳时机`|[Best Time to Buy and Sell Stock](https://leetcode.com/problems/best-time-to-buy-and-sell-stock/)||
|`0122. 买卖股票的最佳时机 II`|[Best Time to Buy and Sell Stock II](https://leetcode.com/problems/best-time-to-buy-and-sell-stock-ii/)||
|`0123. 买卖股票的最佳时机 III`|[Best Time to Buy and Sell Stock III](https://leetcode.com/problems/best-time-to-buy-and-sell-stock-iii/)||
|`0128. 最长连续序列`|[Longest Consecutive Sequence](https://leetcode.com/problems/longest-consecutive-sequence/)||
|`0152. 乘积最大子数组`|[Maximum Product Subarray](https://leetcode.com/problems/maximum-product-subarray/)||
|`0188. 买卖股票的最佳时机 IV`|[Best Time to Buy and Sell Stock IV](https://leetcode.com/problems/best-time-to-buy-and-sell-stock-iv/)||
|`0300. 最长上升子序列`|[Longest Increasing Subsequence](https://leetcode.com/problems/longest-increasing-subsequence/)||
|`0322. 零钱兑换`|[Coin Change](https://leetcode.com/problems/coin-change/)||
|`0309. 佳买卖股票时机含冷冻期`|[Best Time to Buy and Sell Stock with Cooldown](https://leetcode.com/problems/best-time-to-buy-and-sell-stock-with-cooldown/)||
|`0673. 最长递增子序列的个数`|[Number of Longest Increasing Subsequence](https://leetcode.com/problems/number-of-longest-increasing-subsequence/)||
|`0674. 最长连续递增序列`|[Longest Continuous Increasing Subsequence](https://leetcode.com/problems/longest-continuous-increasing-subsequence/)||
|`0714. 买卖股票的最佳时机含手续费`|[Best Time to Buy and Sell Stock with Transaction Fee](https://leetcode.com/problems/best-time-to-buy-and-sell-stock-with-transaction-fee/)||
|`1143. 最长公共子序列`|[Longest Common Subsequence](https://leetcode.com/problems/longest-common-subsequence/)||
|`1397. 找到所有好字符串`|[Find All Good Strings](https://leetcode.com/problems/find-all-good-strings/)||

</details>

<details>
<summary>Recursion</summary>

|题目|来源|实现|
|---|---|---|
|`0509. 斐波那契数`|[Fibonacci Number](https://leetcode.com/problems/fibonacci-number/)||

</details>

<details>
<summary>Divide and Conquer</summary>

|题目|来源|实现|
|---|---|---|
|`0169. 多数元素`|[Majority Element](https://leetcode.com/problems/majority-element/)||

</details>

<details>
<summary>Backtracking</summary>

|题目|来源|实现|
|---|---|---|
|`0036. 有效的数独`|[Valid Sudoku](https://leetcode.com/problems/valid-sudoku/)||
|`0037. 解数独`|[Sudoku Solver](https://leetcode.com/problems/sudoku-solver/)||
|`0039. 组合总和`|[Combination Sum](https://leetcode.com/problems/combination-sum/)||
|`0040. 组合总和 II`|[Combination Sum II](https://leetcode.com/problems/combination-sum-ii/)||
|`0046. 全排列`|[Permutations](https://leetcode.com/problems/permutations/)||
|`0047. 全排列 II`|[Permutations II](https://leetcode.com/problems/permutations-ii/)||
|`0051. N 皇后`|[N-Queens](https://leetcode.com/problems/n-queens/)||
|`0052. N 皇后 II`|[N-Queens II](https://leetcode.com/problems/n-queens-ii/)||
|`0078. 子集`|[Subsets](https://leetcode.com/problems/subsets/)||
|`0079. 单词搜索`|[Word Search](https://leetcode.com/problems/word-search/)||
|`0090. 子集 II`|[Subsets II](https://leetcode.com/problems/subsets-ii/)||

</details>

<details>
<summary>Design</summary>

|题目|来源|实现|
|---|---|---|
|`0208. 实现 Trie（前缀树）`|[Implement Trie (Prefix Tree)](https://leetcode.com/problems/implement-trie-prefix-tree/)||
|`0225. 用队列实现栈`|[Implement Stack using Queues](https://leetcode.com/problems/implement-stack-using-queues/)||
|`0232. 用栈实现队列`|[Implement Queue using Stacks](https://leetcode.com/problems/implement-queue-using-stacks/)||

</details>

<details>
<summary>Two Pointers</summary>

|题目|来源|实现|
|---|---|---|
|`0015. 三数之和`|[3Sum](https://leetcode.com/problems/3sum/)||
|`0016. 最接近的三数之和`|[3Sum Closest](https://leetcode.com/problems/3sum-closest/)||
|`0018. 四数之和`|[4Sum](https://leetcode.com/problems/4sum/)||

</details>

<details>
<summary>Sliding Window</summary>

|题目|来源|实现|
|---|---|---|
|`0003. 无重复字符的最长子串`|[Longest Substring Without Repeating Characters](https://leetcode.com/problems/longest-substring-without-repeating-characters/)||
|`0076. 最小覆盖子串`|[Minimum Window Substring](https://leetcode.com/problems/minimum-window-substring/)||
|`0438. 找到字符串中所有字母异位词`|[Find All Anagrams in a String](https://leetcode.com/problems/find-all-anagrams-in-a-string/)||
|`0567. 字符串的排列`|[Permutation in String](https://leetcode.com/problems/permutation-in-string/)||

</details>

<details>
<summary>Bit Manipulation</summary>

|题目|来源|实现|
|---|---|---|
|`0191. 位 1 的个数`|[Number of 1 Bits](https://leetcode.com/problems/number-of-1-bits/)||
|`0231. 2 的幂`|[Power of Two](https://leetcode.com/problems/power-of-two/)||
|`0338. 比特位计数`|[Counting Bits](https://leetcode.com/problems/counting-bits/)||

</details>

<details>
<summary>Unclassified</summary>

|题目|来源|实现|
|---|---|---|
|`0242. 有效的字母异位词`|[Valid Anagram](https://leetcode.com/problems/valid-anagram/)||
|`1118. 一月有多少天`|[Number of Days in a Month](https://leetcode.com/problems/number-of-days-in-a-month/)||

</details>

### 剑指 Offer

* [032. 从上到下打印二叉树](https://leetcode-cn.com/problems/cong-shang-dao-xia-da-yin-er-cha-shu-lcof/)
* [032. 从上到下打印二叉树 II](https://leetcode-cn.com/problems/cong-shang-dao-xia-da-yin-er-cha-shu-ii-lcof/)
* [032. 从上到下打印二叉树 III](https://leetcode-cn.com/problems/cong-shang-dao-xia-da-yin-er-cha-shu-iii-lcof/)
* [061. 扑克牌中的顺子](https://leetcode-cn.com/problems/bu-ke-pai-zhong-de-shun-zi-lcof/)

### 程序员面试金典

* [0403. 特定深度节点链表](https://leetcode-cn.com/problems/list-of-depth-lcci/)


## License
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Fimajinyun%2Fleetcode-php.svg?type=large)](https://app.fossa.com/projects/git%2Bgithub.com%2Fimajinyun%2Fleetcode-php?ref=badge_large)