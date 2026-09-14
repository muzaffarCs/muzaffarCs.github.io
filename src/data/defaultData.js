/**
 * defaultData.js
 * ------------------------------------------------------------------
 * The factory-default content for the entire portfolio. This is only
 * the FALLBACK — at runtime, DataContext loads any saved edits from
 * localStorage (made via the /admin panel) and merges them on top of
 * this object. To permanently change the default content (so it's
 * correct for every visitor, not just your own browser), edit this
 * file directly, OR use the admin panel's "Export data file" button
 * to generate an updated version of this exact file.
 * ------------------------------------------------------------------
 */

const defaultData = {
  personal: {
    name: 'Muzaffar Ali',
    heroTitle: 'Computer Science Student | Linux & DevOps Enthusiast',
    location: 'Islamabad, Pakistan',
    email: 'mirzamuzu1@gmail.com',
    phone: '+92 345 5828878',
    linkedin: 'https://www.linkedin.com/in/muzaffar-ali-629468257',
    github: 'https://github.com/muzaffarcs',
    githubUsername: 'muzaffarcs',
    // NOTE: no leading slash — these are resolved through withBase() at the
    // point of use so they work correctly under the GitHub Pages subpath.
    resumeUrl: 'resume.pdf',
    avatarUrl: 'avatar-placeholder.svg',
  },

  heroTagline:
    "I build things at the intersection of code and infrastructure — learning to ship software that's not just functional, but reliable to run.",

  about: {
    summary: [
      "I'm a Computer Science undergraduate at Quaid-i-Azam University, currently sitting at the point where writing code and understanding the systems it runs on start to overlap — and that overlap is where I want to build my career.",
      "My foundation is in full-stack fundamentals: C/C++ for how things actually work under the hood, JavaScript and the Node/Express/MongoDB stack for building things people can use, and enough SQL and database theory to reason about where the data lives. Alongside that, I've been steadily pulling toward Linux, Git-based workflows, and containerization with Docker — the tools that turn code someone writes into a system someone can run.",
      "I care less about collecting frameworks and more about understanding why a system is built the way it is. That's the instinct pulling me toward DevOps: the discipline of making software easy to build, test, and trust in production.",
    ],
    careerGoal:
      'To grow into a DevOps / Platform Engineering role where I can combine solid software fundamentals with infrastructure, automation, and cloud practices — starting by deepening my Linux, containerization, and CI/CD skills through hands-on projects and open-source contribution.',
  },

  skillCategories: [
    { category: 'Programming Languages', icon: 'code', skills: ['C', 'C++', 'JavaScript', 'PHP (Basic)', 'SQL'] },
    { category: 'Frontend', icon: 'layout', skills: ['HTML5', 'CSS3', 'Bootstrap', 'JavaScript (DOM)'] },
    { category: 'Backend', icon: 'server', skills: ['Node.js (Basic)', 'Express.js (Basic)', 'REST APIs'] },
    { category: 'Databases', icon: 'database', skills: ['MySQL', 'MongoDB', 'MongoDB Atlas', 'DBMS Fundamentals'] },
    { category: 'Linux', icon: 'terminal', skills: ['Ubuntu Linux', 'Bash Scripting', 'Shell Fundamentals'] },
    { category: 'Git & GitHub', icon: 'git-branch', skills: ['Git', 'GitHub', 'Version Control Workflows'] },
    { category: 'DevOps Tools', icon: 'box', skills: ['Docker (Fundamentals)', 'VS Code'] },
    {
      category: 'Other',
      icon: 'network',
      skills: ['TCP/IP', 'DNS', 'DHCP', 'HTTP/HTTPS', 'Networking Fundamentals', 'Problem Solving', 'Project Management'],
    },
  ],

  currentlyLearning: [
    { title: 'Containerization with Docker', note: 'Going beyond fundamentals into multi-container setups and image optimization.' },
    { title: 'CI/CD Pipelines', note: 'Learning how automated build, test, and deploy pipelines are structured in real projects.' },
    { title: 'Cloud Computing Basics', note: 'Exploring core cloud concepts as a foundation for future AWS/Azure work.' },
    { title: 'Linux System Administration', note: 'Strengthening shell scripting and day-to-day Linux server management.' },
  ],

  experience: [
    {
      role: 'Junior Web Developer',
      org: 'K2 Peak Technologies',
      location: 'Skardu, Pakistan',
      start: 'Jan 2024',
      end: 'Dec 2024',
      type: 'Internship / Junior Role',
      points: [
        'Developed responsive, user-friendly website frontends using HTML, CSS, Bootstrap, and JavaScript.',
        'Collaborated with senior developers to implement UI components and improve website functionality.',
        'Followed modern web development practices and contributed to a shared codebase.',
        'Gained hands-on experience with frontend workflows, code collaboration, and responsive design principles.',
      ],
    },
    {
      role: 'Head of Finance',
      org: 'Feel and Support Organization (FSO)',
      location: 'Pakistan',
      start: 'Sept 2021',
      end: 'Jan 2025',
      type: 'Leadership / Organizational',
      points: [
        'Maintained financial records and managed member collection processes.',
        'Coordinated financial operations across teams while improving organizational efficiency.',
        'Strengthened leadership, communication, and problem-solving skills through administrative responsibilities.',
      ],
    },
  ],

  projects: [
    {
      title: 'Course Registration & Timetable Scheduler',
      description: 'A desktop-based course registration system built to handle student registration and automated timetable generation for an academic department.',
      tech: ['Java', 'Java Swing', 'MySQL'],
      features: [
        'Student registration and record management',
        'Automated timetable generation',
        'Administration dashboard for managing courses',
        'Persistent data storage via MySQL',
      ],
      category: 'Desktop',
      github: 'https://github.com/muzaffarcs',
      demo: null,
    },
    {
      title: 'Weapon Detection using ResNet50 & YOLOv8',
      description: 'An image classification and object detection system trained to identify weapons in images, built to compare deep learning model architectures.',
      tech: ['Python', 'ResNet50', 'YOLOv8', 'Deep Learning'],
      features: [
        'Trained and evaluated multiple deep learning models',
        'Object detection pipeline built with YOLOv8',
        'Model comparison using standard evaluation metrics',
        'Image classification with ResNet50',
      ],
      category: 'AI/ML',
      github: 'https://github.com/muzaffarcs',
      demo: null,
    },
    {
      title: 'REST API using Node.js & MongoDB',
      description: 'A backend REST API supporting full CRUD operations, connected to a cloud-hosted MongoDB Atlas database — built as a hands-on introduction to cloud deployment.',
      tech: ['Node.js', 'Express.js', 'MongoDB', 'MongoDB Atlas'],
      features: [
        'Full CRUD REST endpoints',
        'MongoDB Atlas cloud database integration',
        'Deployed for live testing and learning',
        'Clean, modular Express.js route structure',
      ],
      category: 'Backend',
      github: 'https://github.com/muzaffarcs',
      demo: null,
    },
  ],

  projectCategories: ['All', 'Backend', 'AI/ML', 'Desktop'],

  education: [
    {
      degree: 'Bachelor of Science in Computer Science',
      institution: 'Quaid-i-Azam University, Islamabad',
      start: 'Sept 2023',
      end: 'Present (Expected 2027)',
      detail: 'CGPA: 3.2 / 4.00 — Key modules: Operating Systems, Database Systems, Data Structures & Algorithms, Computer Networks, Object-Oriented Programming.',
    },
    {
      degree: 'Higher Secondary (I.C.S)',
      institution: 'Akhuwat College, Kasur (BISE Lahore)',
      start: '2020',
      end: '2022',
      detail: 'Majors: Computer Science, Mathematics, Physics — Grade: A.',
    },
    {
      degree: 'Matriculation',
      institution: 'FBISE Islamabad',
      start: '2018',
      end: '2020',
      detail: null,
    },
  ],

  /**
   * Certifications support an optional richer schema (issuer, credentialId,
   * credentialUrl, skills[]) for Coursera-style certificates, alongside the
   * simpler older-style entries. All fields except title/issuer/date are optional.
   */
  certifications: [
    {
      title: 'Hands-on Introduction to Linux Commands and Shell Scripting',
      issuer: 'IBM',
      platform: 'Coursera',
      date: 'Aug 2026',
      credentialId: '28TYK6YWC080',
      credentialUrl: 'https://www.coursera.org/account/accomplishments/records/28TYK6YWC080',
      skills: ['Linux', 'Bash'],
      detail: 'Completed a hands-on Linux course covering Bash commands, Linux system architecture, file and network management, shell scripting, pipes and filters, environment variables, and cron job scheduling.',
    },
    {
      title: 'Introduction to Front-End Development',
      issuer: 'Meta',
      platform: 'Coursera',
      date: 'Aug 2026',
      credentialId: 'UQD4HQON6JLL',
      credentialUrl: 'https://www.coursera.org/account/accomplishments/records/UQD4HQON6JLL',
      skills: ['Web Servers', 'Web Development'],
      detail: 'Completed the Introduction to Front-End Development course by Meta, covering HTML, CSS, responsive web design, UI components, Bootstrap, React basics, and the fundamentals of front-end, back-end, and full-stack development.',
    },
    {
      title: 'Linux Cloud and DevOps',
      issuer: 'LearnQuest',
      platform: 'Coursera',
      date: 'Aug 2026',
      credentialId: '0M4WGAV08TV4',
      credentialUrl: 'https://www.coursera.org/account/accomplishments/records/0M4WGAV08TV4',
      skills: ['Linux', 'Git'],
      detail: 'Completed the Linux Cloud and DevOps course, covering Linux fundamentals, cloud computing models (SaaS, IaaS, and PaaS), virtualization, Git and version control, and DevOps fundamentals including containers and environment orchestration.',
    },
    {
      title: 'Web Design & Development',
      issuer: 'DPAK IT, Skardu',
      platform: null,
      date: 'Jul 2023',
      credentialId: null,
      credentialUrl: null,
      skills: [],
      detail: 'Fully practical course covering modern web design and development workflows.',
    },
    {
      title: 'Basic Computing & Graphic Course',
      issuer: 'Nayab Computer Academy',
      platform: null,
      date: 'Feb 2018',
      credentialId: null,
      credentialUrl: null,
      skills: [],
      detail: 'Completed with a grade of A+.',
    },
  ],

  achievements: [
    { title: 'Chairman, IT Club', org: 'Akhuwat College, Kasur', detail: 'Led the college IT Club for 2 years, nominated on the basis of demonstrated IT skills.' },
    { title: 'Web Design & Development Certification', org: 'DPAK IT, Skardu', detail: 'Completed a fully practical course in modern web design and development.' },
    { title: 'Basic Computing & Graphics — Grade A+', org: 'Nayab Computer Academy', detail: 'Completed foundational computing and graphic design coursework with distinction.' },
  ],

  languages: [
    { name: 'Urdu', level: 'Professional' },
    { name: 'English', level: 'Professional' },
    { name: 'Balti', level: 'Professional' },
  ],

  navLinks: [
    { label: 'About', href: '#about' },
    { label: 'Skills', href: '#skills' },
    { label: 'Experience', href: '#experience' },
    { label: 'Projects', href: '#projects' },
    { label: 'Education', href: '#education' },
    { label: 'Certifications', href: '#certifications' },
    { label: 'Contact', href: '#contact' },
  ],
};

export default defaultData;
