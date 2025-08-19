# 🌾 Figured Intern Experience Challenge

Welcome to the Figured Intern Experience! Your mission is to transform raw financial data into a beautiful, interactive Profit & Loss report that helps farmers and accountants make better business decisions.

## 🎯 The Challenge

You'll build a stunning financial reporting interface that showcases a farm's financial performance across different enterprises (Sheep, Wheat, Barley) with interactive features and professional styling.

### What You'll Build

Create a visually appealing Profit & Loss report using Vue.js and Tailwind CSS that displays financial data from our API endpoint. The report should be intuitive, professional, and help users quickly understand the farm's financial story.

## 📊 The Financial Data

Your data comes from a real farm operation called "Pam Testing Farm Operations" covering:
- **Time Period**: April 2025 - March 2026 (Actuals + Forecast)
- **Groups**: Sheep farming, Wheat production, Barley cultivation
- **Categories**: Income, Costs, Operating Expenses
- **Rich Details**: Monthly breakdowns, account-level granularity

**API Endpoint**: `/api/financial-report`

## ✅ Core Requirements

### 1. **Visual Design & Styling**
- Use **Tailwind CSS** exclusively for styling
- Create a professional, clean design that looks like a real accounting report
- Use appropriate colors, typography, and spacing
- Make negative numbers clearly distinguishable (red/parentheses)

### 2. **Data Display**
- Show at least **3 key financial metrics** prominently (e.g., Total Income, Net Profit, Gross Profit)
- Display the company information (name, report type, period)
- Present data in a logical, hierarchical structure
- Format numbers appropriately (thousands separators, currency symbols)
- Clear nesting levels (indentation, borders, colors)

### 3. **Vue.js Implementation**
- Use Vue 3 composition API or options API (your choice)
- Implement reactive data fetching from the API
- Use Vue directives effectively (v-for, v-if, v-show, etc.)
- Handle loading and error states gracefully

### 4. **Code Quality**
- Clean, readable code with meaningful variable names
- Proper component structure and organization
- Appropriate use of Vue reactivity and lifecycle hooks

## 🎨 Design Inspiration

Think of professional financial reports you've seen:
- Clean tables with alternating row colors
- Clear hierarchy with indentation
- Professional typography and spacing
- Subtle borders and dividers
- Color coding for different data types

## 🚀 Stretch Goals (Optional but Impressive!)

### **LLM Financial Commentary**
Use the included **Prism package** to generate AI-powered insights about the financial data:

- **Setup**: We'll provide an OpenAI API key on challenge day
- **Integration**: Use Prism to send financial data to OpenAI
- **Commentary**: Generate insights about trends, concerns, or opportunities
- **Display**: Show AI commentary alongside relevant financial sections

#### Example Commentary Topics:
- "Sheep operations are performing well with strong sales in Q1..."
- "Operating expenses spike in July suggests investigating cost controls..."
- "Forecast shows recovery potential in the wheat enterprise..."

#### Prism Implementation Hints:
```php
// In your controller or service
use EchoLabs\Prism\Facades\Prism;

$response = Prism::text()
    ->using('openai', 'gpt-4')
    ->withPrompt("Analyze this farm financial data and provide insights: " . json_encode($financialData))
    ->generate();
```

## 💡 Technical Tips & Tricks

### **Vue.js Tips**
- Use `computed` properties for calculated totals
- Use `watch` to react to data changes
- Component composition can help organize complex nested structures

### **Tailwind CSS Tips**
- Use spacing utilities consistently (`p-4`, `mb-6`, `space-y-2`)
- Color utilities for financial data (`text-red-600`, `text-green-600`)
- Grid and flexbox utilities for layout (`grid`, `flex`, `justify-between`)

### **Data Handling Tips**
- The API returns structured data with `sections`, `subsections`, and `line_items`
- Each line item has a `values` array matching the column structure
- Use array methods like `reduce()` for calculating totals

## 🏢 How This Aligns with Figured

Figured's mission is to provide **business critical insights to accountants and farmers**. This challenge directly relates to our core value proposition:

### **For Farmers**
- Transform complex financial data into understandable insights
- Help identify profitable and unprofitable enterprises
- Enable better decision-making through clear data visualization
- Support cash flow planning with actuals vs. forecast comparisons

### **For Accountants**
- Create professional reports that clients can easily understand
- Automate the presentation of complex agricultural financial data
- Provide drill-down capabilities for detailed analysis
- Support client advisory conversations with clear visual tools

### **Technical Alignment**
- Real-world financial data structures
- Professional UI/UX standards expected in agricultural software
- Interactive reporting that scales across different farm types
- Modern web technologies that integrate with existing systems

## 📝 Submission Guidelines

### **Code Quality Expectations**
Since we'll be **reviewing and judging your code**:
- Write clean, readable, and well-commented code
- If you use AI assistance (ChatGPT, Copilot, etc.), **be prepared to explain every line**
- Understand your implementation choices and be ready to discuss them
- Consider performance implications of your approach

### **Presentation Day**
- **Top 3 challengers** will present their solution on their laptop
- Be prepared to walk through your code and explain your decisions
- Demonstrate the interactive features live
- Discuss any challenges you encountered and how you solved them

### **Submission Process**
- Submit your solution as a **Pull Request** to the challenge repository
- Include a brief README with setup instructions
- Deadline: Prior to judging (7:45 PM)

## 🛠 Getting Started

1. **Explore the Data Structure**
   ```bash
   # Test the API endpoint
   curl http://localhost/api/financial-report
   ```
2. **Start Simple, Build Up**
   - First, display basic data in a table
   - Add styling and make it look professional
   - Add polish and stretch features

3. **Important Files**
   - **`routes/web.php`** - Defines application routes including:
     - `/` - Welcome page
     - `/challenge` - Main challenge page where you'll build the P&L report
     - `/api/financial-report` - API endpoint that returns the financial data
     - `/api/generate-commentary` - API endpoint for AI commentary generation
   
   - **`app/Http/Controllers/FinancialReportController.php`** - Backend controller that:
     - Provides the complete financial data structure through `getFinancialReport()`
     - Handles AI commentary generation via Prism integration
     - Returns hierarchical data with sections, subsections, and line items
   
   - **`resources/js/pages/Challenge.vue`** - Your main workspace:
     - Currently shows a basic implementation
     - Fetches data from the API endpoint
     - Includes AI commentary demo functionality
     - **This is where you'll build your P&L report!**
   
   - **`resources/js/pages/Welcome.vue`** - Landing page that provides entry points to the challenge
   
   - **`resources/js/app.ts`** - Application entry point that sets up Inertia.js and Vue
   
   - **`resources/views/app.blade.php`** - Laravel Blade template that serves as the HTML shell for the Vue application

## ❓ Need Help?

- **Laravel/PHP Questions**: Check Laravel documentation or ask mentors
- **Vue.js Issues**: Vue 3 documentation has excellent examples
- **Tailwind CSS**: Use the Tailwind CSS documentation and playground
- **Prism Package**: Documentation available in the package repository
- **General Questions**: Don't hesitate to ask the Figured team!

## 🎉 Success Criteria

Your solution will be evaluated on:
1. **Visual Appeal**: Does it look professional and polished?
2. **Functionality**: Do all features work as expected?
3. **Code Quality**: Is the code clean, organized, and maintainable?
4. **User Experience**: Is it intuitive and easy to use?
5. **Technical Implementation**: Good use of modern web practices?
6. **Creativity**: Any innovative features or approaches?

---

**Good luck, and remember**: This challenge reflects real work at Figured. Show us how you'd build software that helps farmers and accountants make better business decisions! 🌾💼
